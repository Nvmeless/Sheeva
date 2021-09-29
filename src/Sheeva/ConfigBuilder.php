<?php
namespace Sheeva;

class ConfigBuilder {

    public array $call;


    public function __invoke(){
        var_dump("Ok");
    }

    public function run() {
        $uri = $_SERVER['REQUEST_URI'];

        if (!empty($uri) && $uri[-1] === "/") {
            header("Location: " . \substr($uri, 0, -1));
            header("HTTP/1.1 301 Moved Permanently");
            exit();
        }
        $get = explode("/", $_SERVER['REQUEST_URI']);
        array_shift($get);
        $this->call = $get;

        return $this;
    }

    public function render(){
        if(!is_null($this->call) && !empty($this->call)){
          if(is_file(VIEWS_PATH . $this->call[0] . ".php")){
            include VIEWS_PATH . $this->call[0] . ".php";
          }  
        }

        return $this;
    }
}