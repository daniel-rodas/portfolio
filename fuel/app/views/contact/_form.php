<?= Form::open(array('action' => Router::get('contact_new'), "class" => "form-horizontal lead  drop-shadow")); ?>
    <p class="">Send me a message. Every design challenge has a unique solution. Looking forward to speaking with you.</p>
<?= View::forge()->render('_includes/session_flash'); ?>
<div class="row">
    <div class="col-md-6">
        <fieldset class=" drop-shadow">
            <legend>Your information.</legend>
            <div class="">
                <div class="">
                    <?php echo Form::label('Full Name', 'fullname', array('class' => 'control-label sr-only')); ?>

                    <?php echo Form::input('fullname', Input::post('fullname', isset($contact) ? $contact->fullname : ''),
                        array(
                            'class' => 'col-md-4 form-control',
                            'placeholder' => 'Full Name',
                            'required',
                            'oninvalid' => "this.setCustomValidity('What should I call you?')",
                            'oninput' => "setCustomValidity('')",
                            )); ?>
                </div>
            </div>
            <div class="">
                <div class="">
                    <?php echo Form::label('Email', 'email', array('class' => 'control-label sr-only')); ?>

                    <?php echo Form::input('email', Input::post('email', isset($contact) ? $contact->email : ''), array('class' => ' form-control', 'placeholder' => 'Email')); ?>

                </div>
                <div class="">
                    <?php echo Form::label('Phone', 'phone', array('class' => 'control-label sr-only')); ?>

                    <?php echo Form::input('phone', Input::post('phone', isset($contact) ? $contact->phone : ''), array('class' => ' form-control', 'placeholder' => 'Phone')); ?>

                </div>
            </div>


        </fieldset>
    </div>
    <div class="col-md-6">
        <fieldset class=" drop-shadow">
            <legend>Availability.</legend>
            <div class="">
                <div class="row">
                    <label>What is your preferred contact method?</label>
                </div>

                <div style=" font-size: 10pt;" class="row">
                    <div class=" checkbox">
                        <label>
                            <input name="preference" value="phone" type="radio"> Phone
                        </label>
                    </div>
                    <div class=" checkbox">
                        <label>
                            <input name="preference" value="email" type="radio"> Email
                        </label>
                    </div>
                    <div class=" checkbox">
                        <label>
                            <input name="preference" value="none" type="radio" checked> No preference
                        </label>
                    </div>
                </div>

            </div>
            <div class="">
                <div class="">
                    <?php echo Form::label('When you are available?', 'available', array('class' => 'control-label')); ?>

                    <?php echo Form::input('available', Input::post('available', isset($contact) ? $contact->available : ''),
                        array('class' => ' form-control', 'placeholder' => 'Available')); ?>
                </div>

            </div>
        </fieldset>
    </div>
</div>

    <div class="row">
        <fieldset class="">
            <legend>Leave a message.</legend>
            <div class="">
                <?php echo Form::label('Message', 'message', array('class' => 'control-label sr-only')); ?>

                <?php echo Form::textarea('message', Input::post('message', isset($contact) ? $contact->message : ''),
                    array(
                        'class' => ' form-control',
                        'rows' => 8,
                        'placeholder' => 'Message',
                        'required',
                        'oninvalid' => "this.setCustomValidity('What did you want to talk about?')",
                        'oninput' => "setCustomValidity('')",
                        )); ?>
            </div>
            <div class="row">
                <?= Form::csrf(); ?>

                <div class="col-md-6"><div class="g-recaptcha" data-sitekey="6LfErSMTAAAAAMwIRRqgca_ZMOTf089Hv_x8W3Sz"></div></div>
                <div class="col-md-6">                <label class='control-label'>&nbsp;</label>
                    <?php echo Form::submit('submit', 'Send', array('class' => 'btn btn-primary', 'style' => 'width:100%; margin: 0 auto;')); ?></div>


            </div>
        </fieldset>
    </div>


<?= Form::close(); ?>