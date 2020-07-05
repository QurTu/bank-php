<?php
namespace Main;


 use App\DB\DataBase;
 
class DataValidation {
    private static $message = '';

    public static function addAcc(array $userData) {
        self::$message = ' ';
        $errors = 0;
        if( strlen($userData['Name'] ) < 3) {
          self::$message .= ' Name too shoort <br>'; 
         $errors++;
       }
        if (strlen($userData['Lastname'] ) < 3 ) {
            self::$message .= '  Last name too shoort <br>';
         $errors++;
        }
        if ( strlen($userData['id']) != 11 &&  !ctype_digit($userData['id'] )) {
            self::$message .= 'wrong id <br>';
         $errors++;
        }
        $list = new DataBase();
        foreach( $list->showAll() as $user ) {
          if ($userData['id'] == $user['id']) {
            $errors++;
            self::$message .= 'id already used <br>';
          }
        }
        if( strlen($userData['iban']) != 20 &&  substr($userData['iban'], 0, 2) != "LT" &&  !ctype_digit(substr($userData['iban'], 2, 18)) )  {
            self::$message .= 'wrong IBAN <br>';
         $errors++;
        }
        if ($errors  < 1 ) {
            $list->create($userData);
            self::$message = 'account added';
         }
         return self::$message;
    }

}