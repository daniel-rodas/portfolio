<?php

class Controller_Portfolio_Home extends Controller_Portfolio_Base
{

    public function action_index()
    {
        /**
         * Portfolio Home Page
         */

        $this->template->content = View::forge('portfolio/template')
            ->set('content',
                Presenter::forge('portfolio/category/home')
                    ->set('exhibitions', $this->PortfolioPackage->getExhibitions() )
                    ->set('exhibitionFeature', $this->PortfolioPackage->exhibitionFeature() )
                    ->set('featuredAsset', $this->PortfolioPackage->getOneRandomAsset() ) );
    }
}
