<?php

abstract class Controller_Portfolio_Base extends \Controller_Base_Template
{
    protected $PortfolioPackage;
    protected $presenter;

    public function before()
    {
        parent::before();
        \Package::load('Portfolio');
        $this->PortfolioPackage = \Portfolio\Portfolio::forge();

        $this->title = "Portfolio | " . $this->title;
        $this->pageTitle = "Web Design & New Media Portfolio";
    }



}
