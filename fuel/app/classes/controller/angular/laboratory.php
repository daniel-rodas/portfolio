<?php

class Controller_Angular_Laboratory extends \Controller_Template
{
    public function before()
    {
        parent::before();

        $this->template = \View::forge('angular/laboratory');
        $this->template->title = "How could this happen?";
    }

    public function action_index()
    {
        $this->template->content = View::forge('angular/application');
    }

}
