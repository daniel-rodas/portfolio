<?php

class Controller_Portfolio_Exhibit_Photography extends Controller_Portfolio_Exhibit
{
    /**
     * @param $slug
     */
    public function action_show( $slug )
    {
        /**
         * Portfolio Exhibit Page
         * Implements MethodTemplate Interface
         */
        $this->asset = $this->PortfolioPackage->asset($slug);
        $this->exhibit = $this->PortfolioPackage->exhibitByAsset($this->asset);
        $this->LoadCommonExhibitData($this->exhibit);
        $this->template->
            content = Presenter::forge('portfolio/exhibit/photography')
                ->set('featuredImage', $this->asset)
                ->set('exhibit', $this->exhibit)
                ->set('related', $this->relatedExhibits);
    }
}
