<?php

namespace Sheeva;

class Api
{

    private array $call;
    private $action;
    private $class;
    private $config;

    public function run()
    {
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

    public function dispatch()
    {
        if (!is_null($this->call[1]) && !empty($this->call[1])) {
            $temp_class =  "\Sheeva\Controllers\\" . $this->call[1];
            if (class_exists($temp_class)) {
                $this->class = new $temp_class($this);
                if (!is_null($this->call[2]) && !empty($this->call[2])) {
                    $action = $this->call[2];
                    if (method_exists($this->class, $action))
                        $this->action = $action;
                }
            } else {
                //Call Exception 
            }
        }

        return $this;
    }

    public function render()
    {
        if (!is_null($this->call[0]) && !empty($this->call[0])) {
            if (is_file(VIEWS_PATH . $this->call[0] . ".php")) {
                $action = $this->action;
                if ($datas = $this->class->$action()) {
                    include VIEWS_PATH . $this->call[0] . ".php";
                } else {
                    // Erreur Controller
                }
            }
        } else {
            // Call Exception
        }
        return $this;
    }

    public function setConfigs($config = null){ 
        if(!is_null($config)){ 
            $this->config = $config;
        }
    }

    public function Configs(){ 
        return $this->config;
    }

    public function setDatabase(){ 

        if(!empty($this->config->database())){ 
            $this->Database = new \Sheeva\Database($this->config->database());
        }
    }


}
