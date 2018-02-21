<?php
//use \Rodasnet\Portfolio\Portfolio;

abstract class Controller_Portfolio_Base extends \Controller_Base_Template
{
    protected $PortfolioPackage;

    public function before()
    {
        parent::before();

        $this->PortfolioPackage = \Rodasnet\Portfolio\Portfolio::forge();

        $this->title = "Portfolio | " . $this->title;
        $this->pageTitle = "Web Design & New Media Portfolio";
    }

}
