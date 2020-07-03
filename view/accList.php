<?php
use App\DB\DataBase;
$AccList = new DataBase();
$list =  $AccList->showAll();
echo '<h2> List of accounts: </h2>';
echo '<h3> NAME , LAST NAME , IBAN , BALANCE    </h3>';

if (!empty($list) ) {
foreach ($list as $user){
    echo '<h5>' . $user['Name'] . ' ' .  $user['Lastname'] .  ' ' . $user['iban'] .  ' ' . $user['balance'] . '</h5>';
}
}else { 
    echo 'no accounts added';
}