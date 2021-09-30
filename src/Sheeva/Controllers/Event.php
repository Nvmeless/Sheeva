<?php

namespace Sheeva\Controllers;

class Event extends Controller
{
    public function __construct($api){
        $this->Core = $api;
        $this->modelPath = "";
        parent::__construct();
    } 
    public function get()
    {
        var_dump($this->Core->Database->simpleQuery("SELECT * FROM test"));

        return ['hello' => "Bonjour"];
    }
}
