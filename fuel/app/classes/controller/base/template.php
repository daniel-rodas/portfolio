<?php

class Controller_Base_Template extends \Controller_Hybrid
{
    protected $title;
    public $utility;

    public function before()
    {
        parent::before();

        // Helper class with renderSilent($content) method for optional View template variables. 
        $this->utility = new Utility();
        isset($this->title) ? $this->title : $this->title = "Daniel Rodas Design";
        $this->template->title = $this->title;

        // Load translation
        \Lang::load('application');

        // If ajax or content_only, set a theme with an empty layout
        if (\Input::is_ajax())
        {
            return parent::before();
        }

    }

    public function action_index()
    {
        die('nothing.');
    }

    public function action_404()
    {
        $messages = ['Uh Oh!', 'Huh ?', 'Are you sure that\'s where you want to go?'];
        $data['notfound_title'] = $messages[array_rand($messages)];
        $data['title'] = '404 Times';
        $data['pageTitle'] = '404 Times';
        $this->template->title = __('page-not-found');
        $this->template->pageTitle = "Web Design & New Media.";
        $this->template->content =  View::forge('404', $data) ;
    }

    /**
     * @return mixed
     */
    public function isCaptchaValid()
    {
        return $this->utility->isCaptchaValid();
    }
}

