<?php 
 namespace Main;
 use Main\Funds;
 use Main\DataValidation;
 use App\DB\DataBase;
 use Main\Login;
 use  App\DB\MySQL;
 class App{
     const DIR = '/bank/public/';
     public static $params = [];
     const VIEW_DIR = './../view/';
     const URL = 'http://localhost/bank/public/';
       
    public static function start() {
        session_start();
        $param = str_replace(self::DIR, '', $_SERVER['REQUEST_URI']);
        self::$params = explode('/', $param);

     
        // login and logout
        if(empty($_SESSION['login'])) {
            $_SESSION['login'] = 0;
        }
        if(isset($_POST['logout'])) {
            $_SESSION['login'] = 0;
        }
        if( self::$params[0] == 'login') {
            if ($_SESSION['login'] == 0) {
            require(self::VIEW_DIR . 'login.php');
            if(!empty($_SESSION['note'])) {
                echo $_SESSION['note'];
                unset($_SESSION['note']);
            }
            if(!empty($_POST)) {
                $login = new Login();
                if( $login->login($_POST['name'], $_POST['pass']))  {
                    header('Location: http://localhost/bank/public');
                    die();
                }
                echo 'incorect login informaction';
                 }}
            else {
            header('Location: http://localhost/bank/public');
            }
            die();
        }
       
        // if not login = rediceted to login
        if($_SESSION['login'] ==  0) {
            header('Location: http://localhost/bank/public/login');
            die();
        }
        


        require(self::VIEW_DIR . 'navBar.php');
        if(!empty($_SESSION['note'])) {
            echo 'works';
            echo $_SESSION['note'];
            unset($_SESSION['note']);
        }
        // add Acc
        if( self::$params[0] == 'addAcc') {
            require(self::VIEW_DIR . 'addForm.php');
            if(!empty($_POST)) {
            echo DataValidation::addAcc($_POST);
            }
            die();
        }
        // add FUnDS
        if( self::$params[0] == 'addFunds') { 
            if(!empty($_SESSION['note'])) {
                echo $_SESSION['note'];
                unset($_SESSION['note']);
            }
            if(!empty($_POST)) {
                Funds::add($_POST['id'], $_POST['value']) ; 
             }
             require(self::VIEW_DIR . 'addFunds.php');
             die();
        }
        //Take Funds
        if( self::$params[0] == 'takeFunds') { 
            if(!empty($_SESSION['note'])) {
                echo 'works';
                echo $_SESSION['note'];
                unset($_SESSION['note']);
            }
            if(!empty($_POST)) {
                Funds::take($_POST['id'], $_POST['value']) ;
             }
             require(self::VIEW_DIR . 'takeFunds.php');
             $_SESSION['notes'] = 'eik sikt';
             die();
        }

            
            if(!empty($_SESSION['note'])) {
                echo $_SESSION['note'];
                unset($_SESSION['note']);
            }
            if(!empty($_POST)) {
               Funds::delete($_POST['delete']);
               require(self::VIEW_DIR . 'accList.php');
               die();
            }
            $sql = new MySQL();
            require(self::VIEW_DIR . 'accList.php');


    }

 }