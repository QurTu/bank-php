<?php 
 namespace Main;
 use App\DB\DataBase;
 class App{
     const DIR = '/bank/public/';
     public static $params = [];
     const VIEW_DIR = './../view/';
     const URL = 'http://localhost/bank/public/';
       
    public static function start() {
        session_start();
        $param = str_replace(self::DIR, '', $_SERVER['REQUEST_URI']);
        self::$params = explode('/', $param);
        require(self::VIEW_DIR . 'navBar.php');
        

       

        if( self::$params[0] == 'addAcc') {
            require(self::VIEW_DIR . 'addForm.php');
            if(!empty($_POST)) {
                $addAcc = new DataBase();
                $addAcc->create($_POST);
                echo 'acc added';
            }
        }
        elseif( self::$params[0] == 'addFunds') { 

        }
        elseif( self::$params[0] == 'addFunds') { 

        }
        else {
            $AccList = new DataBase();
            $list =  $AccList->showAll();
            echo '<h2> List of accounts: </h2>';
            foreach ($list as $user){
                echo '<h5>' . $user['Name'] . '</h5>';
            }
        }


    }

 }