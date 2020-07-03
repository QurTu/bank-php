<?php
namespace App\DB;
use Ramsey\Uuid\Uuid;


 
class DataBase implements db 

{
  private $data;

  public function __construct()
  {

      if (!file_exists('./../app/Db/data.json')) {
          file_put_contents('./../app/Db/data.json', json_encode([]));
      }
  
      $this->data = json_decode(file_get_contents('./../app/Db/data.json'), 1);
  }

   public function create(array $userData) : void {
          $uuid = (string) Uuid::uuid4();
          $userData['balance'] = '0';
          $this->data[$uuid] = $userData;
          file_put_contents('./../app/Db/data.json', json_encode($this->data));
        }
 
  public  function update(string $userId, array $userData) : void {
    $this->data[$userId] = $userData;
    file_put_contents('./../app/Db/data.json', json_encode($this->data));
  }
 
   public function delete(string $userId) : void{
     foreach( $this->data as $id => $user) {
       if( $id == $userId) {
         unset($this->data[$userId]);
         file_put_contents('./../app/Db/data.json', json_encode($this->data));
       }
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
