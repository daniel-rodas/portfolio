<?php

class Controller_Portfolio_Exhibit extends Controller_Portfolio_Base implements Method_Template
{
    protected $asset;
    protected $exhibit;
    protected $exhibition;
    protected $relatedExhibits;
    /**
     * @param $slug
     */
    public function action_show( $slug )
    {
        /**
         * Portfolio Exhibit Page
         * Implements MethodTemplate Interface
         */
        $this->exhibit = $this->PortfolioPackage->exhibit($slug);
        $this->LoadCommonExhibitData($this->exhibit);
        $this->templateExhibit($this->exhibit);
        $this->template->content = $this->presenter->set('exhibit', $this->exhibit)->set('related', $this->relatedExhibits);
    }

    protected function LoadCommonExhibitData( $exhibit )
    {
        $this->template->pageTitle = ucwords(\Inflector::friendly_title($exhibit->slug, ' ', true));
        $this->relatedExhibits = View::forge('portfolio/category/related')
            ->set('exhibits', $this->PortfolioPackage->getRelatedExhibits($exhibit));
        $this->exhibition = $this->exhibit->getExhibition($exhibit);
        $this->template->pageSubTitle = $this->exhibition->name;
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
