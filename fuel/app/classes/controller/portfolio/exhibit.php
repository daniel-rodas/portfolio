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

        return $this->response(['exhibit' => $this->PortfolioPackage->getExhibit($slug)]);

    }


}
