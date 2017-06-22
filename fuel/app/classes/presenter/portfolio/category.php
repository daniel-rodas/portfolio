<?php

/**
 * The Frontpage Page presenter.
 *
 * @package  app
 * @extends  Presenter
 */
class Presenter_Portfolio_Category extends Presenter
{
    /**
     * Prepare the view data, keeping this in here helps clean up
     * the controller.
     *
     * @return void
     */
    public function view()
    {
        $this->subTitle = 'Gallery Categories';
        /* put stuff in main content section of the template*/
        $this->galleries = [
            [
                'name' => 'Integrated Campaign',
                'id' => '1',
            ],
            [
                'name' => 'Print Design',
                'id' => '2',
            ],
            [
                'id' => '3',
                'name' => 'Web + Interactive',
            ],
            [
                'id' => '4',
                'name' => 'Digital Imaging',
            ],
            [
                'id' => '5',
                'name' => 'Motion Graphics',
            ],
            [
                'id' => '6',
                'name' => 'Fine Art',
            ],
        ];
    }
}
