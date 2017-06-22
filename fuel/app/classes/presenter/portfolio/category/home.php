<?php

/**
 * The Frontpage Page presenter.
 *
 * @package  app
 * @extends  Presenter
 */
class Presenter_Portfolio_Category_Home extends Presenter_Portfolio_Page
{

    /**
     * Prepare the view data, keeping this in here helps clean up
     * the controller.
     *
     * @return void
     */
    public function view()
    {
        $this->exhibitionFeature = View::forge('portfolio/exhibition/featured')
            ->
                set('exhibitionFeature', $this->exhibitionFeature);
    }
}
