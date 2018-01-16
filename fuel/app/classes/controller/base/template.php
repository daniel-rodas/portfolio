<?php

class Controller_Base_Template extends \Controller_Rest
{
    protected $title;
    public $utility;
    protected $pageTitle;

    public function before()
    {
        parent::before();

        // Helper class with renderSilent($content) method for optional View template variables. 
        $this->utility = new Utility();
        isset($this->title) ? $this->title : $this->title = "Daniel Rodas Design";

        // Load translation
        \Lang::load('application');

    }

    public function get_index()
    {
        return $this->response('Not Authorized.', 401);
    }

    public function action_404()
    {
        return "Okay, come back in a few days.";
    }

    /**
     * @return mixed
     */
    public function isCaptchaValid()
    {
        return $this->utility->isCaptchaValid();
    }
}

