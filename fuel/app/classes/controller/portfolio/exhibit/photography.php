<?php

class Controller_Portfolio_Exhibit_Photography extends Controller_Portfolio_Exhibit
{
    /**
     * @param $slug
     * @return string
     */
    public function get_show( $slug )
    {
        /**
         * Portfolio Exhibit Page
         * Implements MethodTemplate Interface
         */

        return $this->response(
            [
                'asset' => $this->PortfolioPackage->asset($slug),
                'exhibition' => $this->PortfolioPackage->exhibitByAsset($this->asset),
                'featuredImage' => $this->asset,
                'exhibit' => $this->exhibit,
                'related' => $this->relatedExhibits
            ]
        );
    }
}
