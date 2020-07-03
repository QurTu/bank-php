<?php 
 namespace Main;
 use Main\Funds;
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
            require(self::VIEW_DIR . 'addFunds.php');
            if(!empty($_POST)) {
                Funds::add($_POST['id'], $_POST['value']) ;
                header("Refresh:0");
                
                
             }

        }
        elseif( self::$params[0] == 'takeFunds') { 
            require(self::VIEW_DIR . 'takeFunds.php');
            if(!empty($_POST)) {
                echo 'bybys';
                Funds::take($_POST['id'], $_POST['value']) ;
                header("Refresh:0");
                
             }
        }
        else {
            require(self::VIEW_DIR . 'accList.php');
            if(!empty($_POST)) {
                $deleteAcc = new DataBase();
                $deleteAcc->delete($_POST['delete']);
                header("Refresh:0");
            }
        }


    }

 }