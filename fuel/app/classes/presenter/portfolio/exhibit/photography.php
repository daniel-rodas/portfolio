<?php

/**
 * The Photography Page presenter.
 *
 * @package  app
 * @extends  Presenter
 */
class Presenter_Portfolio_Exhibit_Photography extends Presenter_Portfolio_Exhibit
{
    /**
     * Prepare the view data, keeping this in here helps clean up
     * the controller.
     *
     * @return void
     */
    public function view()
    {
        $this->thumbnails = View::forge('portfolio/exhibit/photography/thumbnails')->set('exhibit', $this->exhibit);
    }
}