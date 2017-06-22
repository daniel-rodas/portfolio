<?php


class Controller_Portfolio_Category extends Controller_Portfolio_Base
{
    /**
     *
     */
    public function before()
    {
        parent::before();

        $this->ServiceType == 'category';

        \Package::load('category');
        $this->ServicePackage = \Category\Category::forge();
    }
    
    public function action_campaign()
    {
        /**
         * Campaign Home Page
         */
        $this->template->pageTitle = "Integrated Campaigns";
        $this->setPresenter( 'campaign' );
    }

    public function action_print()
    {
        /**
         * Campaign Home Page
         */
        $this->template->pageTitle = "Print Design";
        $this->setPresenter( 'print' );
    }
    public function action_interactive()
    {
        /**
         * Campaign Home Page
         */
        $this->template->pageTitle = "Interactive + Web Design";
        $this->setPresenter( 'interactive' );
    }
    public function action_imaging()
    {
        /**
         * Campaign Home Page
         */
        $this->template->pageTitle = "Digital Imaging";
        $this->setPresenter( 'imaging' );
    }
    public function action_motion()
    {
        /**
         * Campaign Home Page
         */
        $this->template->pageTitle = "Motion";
        $this->setPresenter( 'motion' );
    }

    public function action_art()
    {
        /**
         * Campaign Home Page
         */
        $this->template->pageTitle = "Fine Art";
        $this->setPresenter( 'art' );
    }

    protected function setPresenter( $category )
    {
        $this->template->content
            ->set('content', Presenter::forge('portfolio/category/gallery')
                ->set('category', $category) );
    }

    public function action_index()
    {
        /**
         * Portfolio Home Page
         */
        $this->template->content = View::forge('portfolio/template')->set('content', Presenter::forge('portfolio/category/home') );
    }

    public function action_create()
    {
        $this->templateCreate( 'category' );
    }

}
