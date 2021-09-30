<?php
namespace Sheeva;

class ConfigBuilder {

    public function __construct(){ 
        $this->config = SHEEVA_CONFIGS;
        $this->constant();
    }
    
    public function debugMode(){ 
        if($this->config['debug']){ 
            $this->debug = true;
        }
    }
    
    public function constant(){
        foreach ($this->config['constants'] as $name => $value) {
            define($name, $value);
        }

    }

    public function database(){ 
        return $this->config['database'];
    }
}