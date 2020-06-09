<?php

class Controller_Portfolio_Exhibit extends \Controller_Base_Template
{
    protected $asset;
    protected $exhibit;
    protected $exhibition;
    protected $relatedExhibits;
    protected $pageSubTitle;

    public function before()
    {

        parent::before();

        $this->PortfolioPackage = \Rodasnet\Portfolio\Portfolio::forge();

    }

    /**
     * @param $slug
     */
    public function get_show( $slug )
    {
        /**
         * Portfolio Exhibit Page
         * Implements MethodTemplate Interface
         */

      return $this->response(['exhibit' => $this->PortfolioPackage->getExhibit($slug)]);

    }
}
