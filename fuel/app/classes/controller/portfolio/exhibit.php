<?php

class Controller_Portfolio_Exhibit extends Controller_Portfolio_Base
{
    protected $asset;
    protected $exhibit;
    protected $exhibition;
    protected $relatedExhibits;
    protected $pageSubTitle;
    /**
     * @param $slug
     */
    public function get_show( $slug )
    {
        /**
         * Portfolio Exhibit Page
         * Implements MethodTemplate Interface
         */

        //$this->exhibit = $this->PortfolioPackage->exhibit($slug);

        // TODO: Fix null results
        $this->exhibit = $this->PortfolioPackage->exhibit('photograpy');

        return $this->response(['exhibit' => $this->exhibit]);

        // ERROR!
//        $this->LoadCommonExhibitData($this->exhibit);
//        $this->templateExhibit($this->exhibit);
//        $this->template->content = $this->presenter->set('exhibit', $this->exhibit)->set('related', $this->relatedExhibits);
    }

    protected function LoadCommonExhibitData( $exhibit )
    {
        $this->pageTitle = ucwords(\Inflector::friendly_title($exhibit->slug, ' ', true));
        $this->relatedExhibits = $this->PortfolioPackage->getRelatedExhibits($exhibit);
        $this->exhibition = $this->exhibit->getExhibition($exhibit);
        $this->pageSubTitle = $this->exhibition->name;
    }

    /**
     * Portfolio Exhibit Page
     * Implements MethodTemplate Interface
     * @param $exhibit
     */
    public function templateExhibit($exhibit)
    {
        switch ($this->exhibition->slug)
        {
            case 'exhibition-print':
                $this->presenter = Presenter::forge('portfolio/exhibit');
                break;
            case 'exhibition-interactive':
                $this->presenter = Presenter::forge('portfolio/exhibit/interactive');
                break;
            case 'exhibition-imaging':
                $this->presenter = Presenter::forge('portfolio/exhibit');
                break;
            case 'exhibition-motion':
                $this->presenter = Presenter::forge('portfolio/exhibit');
                break;
            case 'exhibition-fine-art':
                $this->presenter = Presenter::forge('portfolio/exhibit');
                break;
            case 'exhibition-photography':
                $this->presenter = Presenter::forge('portfolio/exhibit/photography')
                    ->set('featuredImage', $exhibit)
                    ->set('exhibit', $exhibit);
                break;
            case 'exhibition-campaign':
                $this->presenter = Presenter::forge('portfolio/exhibit/campaign')
                    ->set('featuredImage', $exhibit)
                    ->set('thumbnails',
                        View::forge('portfolio/exhibit/campaign/thumbnails')->set('exhibit', $exhibit)
                    );
                break;
            default:
                $this->presenter = Presenter::forge('portfolio/exhibit');
                break;
        }
    }
}
