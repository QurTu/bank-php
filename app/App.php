<?php 
 namespace Main;
 class App{
     const DIR = '/bank/public/';
     public static $params = [];
     const VIEW_DIR = './../view/';
       
    public static function start() {
        session_start();
        $param = str_replace(self::DIR, '', $_SERVER['REQUEST_URI']);
        self::$params = explode('/', $param);
        require(self::VIEW_DIR . 'navBar.php');
        if( self::$params[0] == 'addAcc') {

        }
    }

 }