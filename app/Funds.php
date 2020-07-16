<?php
  namespace Main;

 use App\DB\DataBase;
 


 class Funds {

    public static function add($id, $add) {
        if( $add > 0) {
        $data = new DataBase();
        $old = $data->show($id);
        $old['balance'] =  floatval( $old['balance']) +floatval($add);
        $data->update($id, $old);
        $_SESSION['note'] = "funds  succesfuly added";
        echo  $_SESSION['note'];
        }
        else {
        $_SESSION['note'] = "can't add less ten 0";
        }
    }

    public static function take($id, $add) {
        $data = new DataBase();
        $old = $data->show($id);
        $old['balance'] =  floatval( $old['balance']) - floatval($add);
      if($old['balance'] >= 0 )  {
        $data->update($id, $old); 
        $_SESSION['note'] = "funds succesfuly withdrown";
      }
      else {
        $_SESSION['note'] = "can't withdrawn. Not Enough money in account";
      }
    }
    public static function delete($id) {
        $dataBase = new DataBase();
        $user =  $dataBase->show($id);
      if( $user['balance'] == 0) {
          $dataBase->delete($id) ;
          $_SESSION['note'] = " <br> <br> Account succesfuly deleted";
      }
      else {
        $_SESSION['note'] = "Cant delete. To delete balanse has to be 0 <br>";
      }
      }
    
 }