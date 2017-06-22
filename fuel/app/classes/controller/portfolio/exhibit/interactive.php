<?php

class Controller_Portfolio_Exhibit_Interactive extends Controller_Portfolio_Exhibit
{
    public function action_show( $slug )
    {

        $this->template->
        content = Presenter::forge('portfolio/exhibit/interactive')
            ->set('featuredImage', $this->asset)
            ->set('exhibit', $this->exhibit)
            ->set('thumbnails', View::forge('portfolio/exhibit/interactive/thumbnails')->set('exhibit', $this->exhibit) )
            ->set('related', $this->related);
    }
}
