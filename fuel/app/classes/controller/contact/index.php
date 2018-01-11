<?php

class Controller_Contact_Index extends \Controller_Base_Template
{
    protected $ServiceContacts;

    public function before()
    {
        parent::before();
        $this->template->title = "Contact | " . $this->template->title;
        $this->template->pageTitle = "Get in contact with Daniel.";

        // Load Contacts package
        \Package::load('contacts');
        \Package::load('email');
        $this->ServiceContacts = \Contacts\Contacts::forge();
    }

    public function action_index()
    {
        /**
         * Contact Page
         */

        $this->template->content = View::forge('contact/index');

    }

    public function action_gratitude()
    {
        /**
         * Contact Thank You.
         */

        $this->template->title = "Thank you | " . $this->template->title;
        $this->template->content = View::forge('contact/thankyou');
    }

    public function action_create()
    {
        if (Input::method() == 'POST')
        {
            if( ! $this->isCaptchaValid() )
            {
                Session::set_flash('error', 'Bad Captcha.');

                Response::redirect('contact/index');
            }
            
            $emailValidation = Validation::forge('email');
            $emailValidation->add_field('email', 'Email', 'required|valid_email|max_length[254]');

            // Test email validation and store results in boolean variable.
            $emailIsValid = $emailValidation->run();

            $phoneValidation = Validation::forge('phone');
            $phoneValidation->add_field('phone', 'Phone', 'required|max_length[20]');
            $phoneIsValid = $phoneValidation->run();

            if ( ! $emailIsValid AND ! $phoneIsValid )
            {
                Session::set_flash('error', 'Please provide either a phone number or email address.');

                Response::redirect('contact/index');
            }

//            if ( \Fuel::$env == \Fuel::PRODUCTION )
            if (true)
            {
                $contactAddresses =  '';

                if ($emailIsValid)
                {
                    $this->sendCustomerEmail( Input::post('email'), Input::post('fullname'), Input::post('message') );
                    $contactAddresses =  Input::post('email');
                }

                if ( $emailIsValid AND $phoneIsValid )
                {
                    $contactAddresses =  Input::post('email') . ' ' .  Input::post('phone');
                }
                elseif($phoneIsValid)
                {
                    $contactAddresses = Input::post('phone');
                }

                $this->sendSystemEmail( Input::post('fullname'), Input::post('message') , Input::post('preference') , $contactAddresses );
            }
            
            try {
                // Run query and hope for the best.
                $contact = $this->ServiceContacts
                    ->newContact(
                        Input::post('fullname'),
                        Input::post('message'),
                        Input::post('email'),
                        Input::post('phone'),
                        Input::post('preference'),
                        Input::post('available')
                    );
                if(isset($contact->fullname))
                {
                    Session::set_flash('success', 'Added contact ' . $contact->fullname . '.');
                    Response::redirect('contact/gratitude');
                } else
                {
                    foreach ($contact as $error)
                    {
                        Session::set_flash('error',  $error->get_message() );
                    }
                    Response::redirect('contact/index');
                }

            } catch ( \Fuel\CoreValidation_Error  $e)
            {
                // returns the individual ValidationError objects
                Session::set_flash('error',  $e->error() );
                Response::redirect('contact/index');
            }
            catch (\PhpErrorException $e)
            {
                // returns the individual ValidationError objects
                Session::set_flash('error', $e->getMessage() );
                Response::redirect('contact/index');
            }
        }
    }

    protected function sendSystemEmail( $fullName, $message, $contactPreference, $contactAddress = null )
    {
        // Create an instance
        $email = Email::forge();
        $email->from('info@danielrodasdesign.com', 'Daniel Rodas Design Website' );
        $email->to( 'daniel@rodasnet.com' );

        // Set a subject
        $subject = $fullName . ", Daniel Rodas Design Website Contact Request.";
        $body =  "Full name: " . $fullName . " \r\n";
        $body .= "Contact preference: " . $contactPreference . " \r\n";

        if($contactPreference == "none" AND ! is_null($contactAddress) )
        {
            $body .= "Contact address: " . $contactAddress . " \r\n";
        }

        if($contactPreference == "phone" AND ! is_null($contactAddress) )
        {
            $body .= "Phone: " . $contactAddress . " \r\n";
        }

        if ( $contactPreference == 'email' AND ! is_null($contactAddress) )
        {
            $emailAddress = $contactAddress;
            $email->reply_to( $emailAddress, $fullName);
            $body .= "Email: " . $emailAddress . " \r\n";
        }

        $body .= "Message: " . $message . " \r\n";
        $email->subject($subject);
        $email->body( $body );
        Session::set_flash('info', 'Trying to Send Message ...');

        try
        {
            $email->send();
            Session::set_flash('info', 'Message Sent');
        }
        catch(\EmailValidationFailedException $e)
        {
            // The validation failed
            // returns the individual ValidationError objects
            Session::set_flash('error', 'Could not validate email. Error: ' . $e->getMessage());
        }
        catch(\EmailSendingFailedException $e)
        {
            // The driver could not send the email
            // returns the individual ValidationError objects
            Session::set_flash('error', 'Could not send email. Error: ' . $e->getMessage());
        }
    }

    protected function sendCustomerEmail( $emailAddress, $fullName = null, $message )
    {
        // Create an instance
        $email = Email::forge();
        $email->from('info@danielrodasdesign.com', 'Daniel Rodas Design' );

        $email->to( $emailAddress, $fullName );
        // Set a subject
        $subject = $fullName . ', Thank you for contacting Daniel Rodas Design.';
        $body = 'Thank you for contacting me ' . $fullName . '.  I will get back you you soon.';
        $email->subject($subject);
        $email->body( $body );
        Session::set_flash('info', 'Trying to Send Message ...');

        try
        {
            $email->send();
            Session::set_flash('info', 'Message Sent');
        }
        catch(\EmailValidationFailedException $e)
        {
            // The validation failed
            // returns the individual ValidationError objects
            Session::set_flash('error', 'Could not validate email. Error: ' . $e->getMessage());
        }
        catch(\EmailSendingFailedException $e)
        {
            // The driver could not send the email
            // returns the individual ValidationError objects
            Session::set_flash('error', 'Could not send email. Error: ' . $e->getMessage());
        }
    }

}
