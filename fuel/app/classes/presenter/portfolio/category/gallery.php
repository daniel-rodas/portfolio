<?php

/**
 * The Frontpage Page presenter.
 *
 * @package  app
 * @extends  Presenter
 */
class Presenter_Portfolio_Category_Gallery extends Presenter
{
    /**
     * Prepare the view data, keeping this in here helps clean up
     * the controller.
     *
     * @return void
     */
    public function view()
    {
        // TODO HMVC call to gallery module or directly portfolio package using $this->category;
        
        /* put stuff in main content section of the template*/
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
    }
}
