<?php

namespace Sheeva;

class Api
{

    public array $call;


    public function __invoke()
    {
        var_dump("Ok");
    }

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

    public function render($datas)
    {
        if (!is_null($this->call) && !empty($this->call)) {
            if (is_file(VIEWS_PATH . $this->call[0] . ".php")) {
                // ob_start();

                include VIEWS_PATH . $this->call[0] . ".php";

                // $this->view = ob_get_clean();
            }
        }

        return $this;
    }

    public function view()
    {
        echo $this->view;
    }
}
