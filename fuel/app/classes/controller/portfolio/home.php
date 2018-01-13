<?php

class Controller_Portfolio_Home extends Controller_Portfolio_Base
{

    public function get_list()
    {
        /**
         * Portfolio Home Page
         */

        return $this->response(
            [
                'exhibitions' => $this->PortfolioPackage->getExhibitions(),
                'exhibitionFeature' => $this->PortfolioPackage->exhibitionFeature(),
                'featuredAsset' => $this->PortfolioPackage->getOneRandomAsset()
            ]
        );
    }
}
