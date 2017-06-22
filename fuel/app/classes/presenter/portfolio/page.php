<?php

/**
 * The Frontpage Page presenter.
 *
 * @package  app
 * @extends  Presenter
 */


class Presenter_Portfolio_Page extends Presenter
{
//    protected $PortfolioPackage;
//
//    public function before()
//    {
//        parent::before();
//
//        \Package::load('Portfolio');
//        $this->PortfolioPackage = \Portfolio\Portfolio::forge();
//    }
    /**
     * Prepare the view data, keeping this in here helps clean up
     * the controller.
     *
     * @return void
     */

    public function view()
    {
        Route::redirect('404');
    }
}
