<?php

namespace Gallery\Controller;

class Base extends \Controller_Hybrid
{
    public function before()
    {
        parent::before();

        // Load translation
        \Lang::load('gallery');
    }
}