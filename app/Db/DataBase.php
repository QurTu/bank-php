<?php
namespace App\DB;
use Ramsey\Uuid\Uuid;


 
class DataBase implements db 

{
  private $data;
  public $message;

  public function __construct()
  {

      if (!file_exists('./../app/Db/data.json')) {
          file_put_contents('./../app/Db/data.json', json_encode([]));
      }
  
      $this->data = json_decode(file_get_contents('./../app/Db/data.json'), 1);
  }

   public function create(array $userData) : void {
     $errors = 0;
     if( strlen($userData['Name'] ) < 3) {
       $this->message .= ' Name too shoort <br>'; 
      $errors++;
    }
     if (strlen($userData['Lastname'] ) < 3 ) {
      $this->message .= '  Last name too shoort <br>';
      $errors++;
     }
     if ( strlen($userData['id']) != 11 &&  !ctype_digit($userData['id'] )) {
      $this->message .= 'wrong id <br>';
      $errors++;
     }
     foreach( $this->data as $user ) {
       if ($userData['id'] == $user['id']) {
         $errors++;
         $this->message .= 'id already used <br>';
       }
     }
     if( strlen($userData['iban']) != 20 &&  substr($userData['iban'], 0, 2) != "LT" &&  !ctype_digit(substr($userData['iban'], 2, 18)) )  {
      $this->message .= 'wrong IBAN <br>';
      $errors++;
     }
        // no errors
      if ($errors  < 1 ) {
          $uuid = (string) Uuid::uuid4();
          $userData['balance'] = '0';
          $this->data[$uuid] = $userData;
          file_put_contents('./../app/Db/data.json', json_encode($this->data));
          $this->message = 'account added';
      }
      echo $this->message;
      unset($this->message);
        }
 
  public  function update(string $userId, array $userData) : void {
    if($userData['balance'] >= 0) {
    $this->data[$userId] = $userData;
    file_put_contents('./../app/Db/data.json', json_encode($this->data));
  }
  else {
    $this->message .= ' cant widthdrow. Not enough money in account' ;
    echo $this->message;
    unset($this->message);
  }
}
 
   public function delete(string $userId) : void{
     foreach( $this->data as $id => $user) {
       if( $id == $userId) {
         if ($user['balance'] == 0 ) {
          $this->message .= '  account deleted <br>';
         unset($this->data[$userId]);
         file_put_contents('./../app/Db/data.json', json_encode($this->data));
       }
       else {
        $this->message .= '  Cant delete. To delete balanse has to be 0 <br>';
       }
      }
      echo $this->message;
      unset($this->message);
     }

 }
 
   public function show(string $userId) : array{
    foreach( $this->data as $id => $user) {
      if( $id == $userId) { 
        return $user;
      }
     }

 }
    
 public   function showAll() : array {
   if (empty($this->data)) {
    return [];
   } else{
     return $this->data;
   }
   }

 }
