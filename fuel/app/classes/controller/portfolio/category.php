<?php


class Controller_Portfolio_Category extends Controller_Portfolio_Base
{
    protected $ServicePackage;

    protected $gallery;

    public function before()
    {
        parent::before();
        $this->ServicePackage = \Rodasnet\Portfolio\Category::forge();
    }
    
    public function get_campaign()
    {
        /**
         * Campaign Home Page
         */
        $this->pageTitle = "Integrated Campaigns";
        return $this->generateDetails( 'campaign' );
    }

    public function get_print()
    {
        /**
         * Campaign Home Page
         */
        $this->pageTitle = "Print Design";
        return $this->generateDetails( 'print' );
    }

    public function get_interactive()
    {
        /**
         * Campaign Home Page
         */
        $this->pageTitle = "Interactive + Web Design";
        return $this->generateDetails( 'interactive' );
    }
    public function get_imaging()
    {
        /**
         * Campaign Home Page
         */
        $this->pageTitle = "Digital Imaging";
        return $this->generateDetails( 'imaging' );
    }
    public function get_motion()
    {
        /**
         * Campaign Home Page
         */
        $this->pageTitle = "Motion";
        return  $this->generateDetails( 'motion' );
    }

    public function get_art()
    {
        /**
         * Campaign Home Page
         */
        $this->pageTitle = "Fine Art";
        return $this->generateDetails( 'art' );
    }

    protected function generateDetails( $category )
    {
        $this->gallery = [
            [
                'name' => 'Zoe Sense.',
                'description' => 'Wearable technology that keeps your body in a comfortable in all environments throughout the day.',
                'id' => '4',
            ],
            [
                'name' => 'Aegis.',
                'description' => 'Cutlery smart enough to detect bacterium and allergens, and give you a breakdown of nutrient breakdown while you prepare food.',
                'id' => '3',
            ],
            [
                'id' => '2',
                'name' => 'Cherry Blossom Festival.',
                'description' => 'Annual celebration in San Francisco dedicated you spring when the cherry blossoms bloom.',
            ],
            [
                'id' => '1',
                'name' => 'Marine Museum.',
                'description' => 'Dedicated museum in North Carolina exhibits the rich history of the United States Marine Corps as well as the wars and battle fought.',
            ],
        ];

        $this->gallery['category'] = $category;

        $this->gallery['pageTitle'] = $this->pageTitle;

        return $this->response($this->gallery);
    }

}
