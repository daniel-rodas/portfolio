<?php

/**
 * The Frontpage Page presenter.
 *
 * @package  app
 * @extends  Presenter
 */
class Presenter_Portfolio_Exhibit_Campaign extends Presenter
{
    /**
     * Prepare the view data, keeping this in here helps clean up
     * the controller.
     *
     * @return void
     */
    public function view()
    {
        $this->logo = View::forge('portfolio/exhibit/campaign/logo')->set('logo', $this->exhibit);

        $sideBySide = [];

        foreach ($this->exhibit->assets as $key => $asset)
        {
            if ($asset->type == 'description-image')
            {
                $this->descriptionImage = $asset;
            }

            if ($asset->type == 'side-by-side')
            {
                $sideBySide[$key] = $asset;
            }
        }

        $this->alternativePosters = View::forge('portfolio/exhibit/campaign/alternative-posters')->set('assets', $this->exhibit->assets);
        $this->advertisementStaging = View::forge('portfolio/exhibit/campaign/advertisement-staging')->set('assets', $this->exhibit->assets);
        $this->sideBySide = View::forge('portfolio/exhibit/campaign/side-by-side')->set('sideBySide', $sideBySide );
    }
}
