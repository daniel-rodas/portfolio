<?php

class Controller_Portfolio_Create extends Controller_Portfolio_Base
{
    protected $ServicePackage;
    protected $ServiceType = '';
    protected $PortfolioUrl = '';
    protected $createView;

    public function before()
    {
        parent::before();

        \Package::load('Portfolio');
        $this->ServicePackage  = \Portfolio\Portfolio::forge();
    }

    public function action_exhibition()
    {
        /* TODO implement HTML form parent and category options list */
        $this->ServiceType = 'exhibition';
        $this->createView = View::forge('portfolio/create/_form')
            /*    Set parent_id options for HTML form */
            ->set('parentOptions', $this->ServicePackage->getExhibits() );
        $this->templateCreate();
    }

    public function action_exhibit()
    {
        /* TODO implement HTML form parent and category options list */
        $this->ServiceType = 'exhibit';
        $this->createView = View::forge('portfolio/create/_form')
            /*    Set parent_id options for HTML form */
            ->set('parentOptions', $this->ServicePackage->getExhibits() );
        $this->templateCreate();
    }

    public function action_asset()
    {
        $this->ServiceType = 'asset';
        $this->createView = View::forge('portfolio/asset/_form')
            /*    Set parent_id options for HTML form */
            ->set('exhibitions', $this->ServicePackage->getExhibitions() );
        $this->templateCreate();
    }

    /**
     * Handle post data for create portfolio item and render fom view
     */
    protected function templateCreate()
    {
        if (\Fuel::$env == \Fuel::PRODUCTION) {
            Response::redirect('404');
        }

        if (Input::method() == 'POST') {
            if (!\Security::check_token()) {
                Response::redirect('404');
            }

            try {
                // Run query and hope for the best.
                $create = 'new' . ucwords($this->ServiceType);

                $portfolioItem = $this->ServicePackage
                    ->$create(
                        Input::post('name'),
                        (Input::post('slug') != '') ?
                            \Inflector::friendly_title(Input::post('slug'), '-', true) :
                            \Inflector::friendly_title(Input::post('name'), '-', true),
                        Input::post('url'),
                        Input::post('description'),
                        Input::post('parent_id'),
                        Input::post('category_id')
                    );

                Session::set_flash('success', 'Added  ' . $this->ServiceType . ' -> ' .
                    $portfolioItem->name . ' in the DB. ');

                Response::redirect('portfolio/create/asset')->set('actionType', $this->ServiceType);

            } catch (\PhpErrorException $e) {
                // returns the individual ValidationError objects
                Session::set_flash('error', 'Could not save contact. Error: ' . $e->getMessage());
                Response::redirect('portfolio/home/index');
            }
        }

        /*
         *     Set view in template
         *     Set parent_id options for HTML form
         * */
        $this->template->content = $this->createView->set('actionType', $this->ServiceType);
    }
}
