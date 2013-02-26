<?php

class Map_Map_Controller extends Controller {

    public function __construct() {
        
    }


    public function action_index()
    {
        return View::make('map::map');
    }

}