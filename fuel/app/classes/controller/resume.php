<?php

class Controller_Resume extends \Controller_Base_Template
{
    protected $ServiceContacts;

    public function before()
    {
        parent::before();
        $this->template->title = "Resume | " . $this->template->title;
        $this->template->pageTitle = "Resume";
    }

    public function action_index()
    {
        /**
         * Resume Page
         */

        $this->template->content = View::forge('resume/index');

    }

}
