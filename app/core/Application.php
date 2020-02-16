<?php

class Application {
    protected $controller= ''; 
    protected $action= ''; 
    protected $prams = []; 

    public function __construct()
    {
            echo $_SERVER['REQUEST_URI'];
    }
}