<?php
use App\DB\DataBase;
$AccList = new DataBase();
$list =  $AccList->showAll();
echo '<h2> List of accounts: </h2>';
foreach ($list as $user){
    echo '<h5>' . $user['Name'] . '</h5>';
}