<?php 
namespace Sheeva\Controllers;

class Controller {
    public function __construct(){
       if(is_file($this->modelPath)) {
        include $this->modelPath;
        $this->Model = $source;
       }
    }

}