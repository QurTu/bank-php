<?php
  namespace Main;

 use App\DB\DataBase;
 


 class Funds {

    public static function add($id, $add) {
        $data = new DataBase();
        $old = $data->show($id);
        $old['balance'] =  floatval( $old['balance']) +floatval($add);
        $data->update($id, $old);

    }

    public static function take($id, $add) {
        $data = new DataBase();
        $old = $data->show($id);
        $old['balance'] =  floatval( $old['balance'])  - floatval($add);
        $data->update($id, $old);

    }
 }