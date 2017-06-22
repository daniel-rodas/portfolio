<?php

class Controller_Portfolio_Exhibit_Campaign extends Controller_Portfolio_Exhibit
{
    public function action_show( $slug )
    {
        $this->LoadCommonExhibitData($slug);

//        $this->template->pageTitle = ucwords(  \Inflector::friendly_title($slug, ' ', true));
//
//        $asset = $this->PortfolioPackage->asset( $slug );
//        $exhibit = $this->PortfolioPackage->exhibitByAsset( $asset );
//
//        $related = View::forge('portfolio/category/related')
//            ->set('exhibits', $this->PortfolioPackage->getRelatedExhibits( $exhibit ));
//
//        $exhibition = $exhibit->getExhibition($exhibit);
//        $this->template->pageSubTitle = $exhibition->name;
        $this->template->
        content = Presenter::forge('portfolio/exhibit/campaign')
            ->set('featuredImage', $asset)
            ->set('exhibit', $exhibit)
            ->set('thumbnails', View::forge('portfolio/exhibit/photography/thumbnails')->set('exhibit', $exhibit) )
            ->set('related', $related);
    }
}
