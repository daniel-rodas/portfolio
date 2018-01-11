<?php


class Controller_About_Index extends \Controller_Base_Template
{
    public function before()
    {
        parent::before();

        $this->template->title = "Daniel Rodas Design";
    }

    public function action_index()
    {
        /**
         * Home page, featured story
         */
        $this->template->title = "About " . $this->template->title;
        $this->template->pageTitle = 'Web Design & Development';
        $this->template->content = Presenter::forge('about/page');
    }
}
