<?php
namespace App\DB;


 
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
          $userData['balance'] = '0';
          $this->data[] = $userData;
          file_put_contents('./../app/Db/data.json', json_encode($this->data));
        }
 
  public  function update(string $userId, array $userData) : void {

  }
 
   public function delete(string $userId) : void{

 }
 
   public function show(string $userId) : array{

 }
    
 public   function showAll() : array {
   if (empty($this->data)) {
    return [];
   } else{
     return $this->data;
   }
   }

 }
