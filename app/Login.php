<?php
namespace Main;

class Login {
    private $data;


    public function __construct()
    {
  
        if (!file_exists('./../app/Db/login.json')) {
            file_put_contents('./../app/Db/login.json', json_encode([]));
        }
    
        $this->data = json_decode(file_get_contents('./../app/Db/login.json'), 1);
    }
 
    public function login( $name, $pass) {
        foreach($this->data as $user) {
            if($user['name'] == $name && $user['pass'] = md5($pass) ) {
                $_SESSION['login'] = 1 ;
                return true;
            }
        }
        return false;
    }
   

} 