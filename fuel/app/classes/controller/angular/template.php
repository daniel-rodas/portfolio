<?php


class Controller_Angular_Template extends \Controller_Template
{
    public function before()
    {
        parent::before();

        $this->template = \View::forge('angular/blank');
    }

    public function action_hello()
    {
        $this->template->content = View::forge('angular/application');
    }

    public function action_navigation()
    {
        $this->template->content = View::forge('angular/navigation');
    }

}
