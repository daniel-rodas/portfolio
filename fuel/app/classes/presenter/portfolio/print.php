<?php

/**
 * The Print Category presenter.
 *
 * @package  app
 * @extends  Presenter
 */
class Presenter_Portfolio_Print extends Presenter
{

    public function set_view()
    {
        $this->_view = View::forge('portfolio/category/print');
    }

    /**
     * Prepare the view data, keeping this in here helps clean up
     * the controller.
     *
     * @return void
     */
    public function view()
    {
        $this->categoryName = 'Print Design.';
        /* put stuff in main content section of the template*/
        $this->exhibits = [
            [
                'name' => 'Mandala.',
                'description' => 'Wearable technology that keeps your body in a comfortable in all environments throughout the day.',
                'id' => '4',
            ],
            [
                'name' => 'Breville Blender.',
                'description' => 'Cutlery smart enough to detect bacterium and allergens, and give you a breakdown of nutrient breakdown while you prepare food.',
                'id' => '3',
            ],
            [
                'id' => '2',
                'name' => 'Modern Ninjacon.',
                'description' => 'Annual celebration in San Francisco dedicated you spring when the cherry blossoms bloom.',
            ],
            [
                'id' => '1',
                'name' => 'Earth 2075.',
                'description' => 'Dedicated museum in North Carolina exhibits the rich history of the United States Marine Corps as well as the wars and battle fought.',
            ],
            [
                'id' => '1',
                'name' => 'Personal Book.',
                'description' => 'Dedicated museum in North Carolina exhibits the rich history of the United States Marine Corps as well as the wars and battle fought.',
            ],
        ];
    }
}
