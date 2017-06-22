<?php

/**
 * The Frontpage Page presenter.
 *
 * @package  app
 * @extends  Presenter
 */
class Presenter_Portfolio_Exhibit_Interactive extends Presenter
{
    /**
     * Prepare the view data, keeping this in here helps clean up
     * the controller.
     *
     * @return void
     */
    public function view()
    {
        $this->logo = View::forge('portfolio/exhibit/interactive/logo')->set('logo', $this->exhibit);

        $prototype = [];
        $websiteMockup = [];

        foreach ($this->exhibit->assets as $key => $asset)
        {
            switch ($asset->type)
            {
                case 'description-image':
                    $this->descriptionImage = $asset;
                    break;
                case 'prototype':
                    $prototype[$key] = $asset;
                    $this->prototype = View::forge('portfolio/exhibit/interactive/prototype')
                        ->set('prototype', $prototype );
                    break;
                case 'website-mockup-image':
                    $websiteMockup['image'] = $asset;
                    break;
                case 'website-mockup-url':
                    $websiteMockup['url'] = $asset;
                    break;
                case 'invision-ipad':
                    $this->invisionAppIpad
                        = View::forge('portfolio/exhibit/interactive/staging/invisionapp/ipad')
                        ->set('asset', $asset);
                    break;
                case 'invisionapp-iphone':
                    $this->invisionAppIphone
                        = View::forge('portfolio/exhibit/interactive/staging/invisionapp/phone')
                        ->set('asset', $asset);
                    break;
            }
        }

        if(isset($websiteMockup['image']) AND isset($websiteMockup['url']) )
        {
            $this->websiteMockup    = View::forge('portfolio/exhibit/interactive/staging/website')
                ->set('a', $websiteMockup);
        }
    }
}
