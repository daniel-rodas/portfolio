<?php


class Controller_Angular_Template_Home extends Controller_Angular_Template
{
    public function action_carousel()
    {
        $this->template->content = View::forge('angular/portfolio/carousel');
    }
}
