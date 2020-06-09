<?php

class Controller_Base_Template extends \Controller_Rest
{
    public $utility;

    public function before()
    {
        parent::before();

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

