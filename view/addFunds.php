<?php
use App\DB\DataBase;
use Main\App;
$AccList = new DataBase();
$list =  $AccList->showAll();
echo '<h2> List of accounts: </h2>';
echo '<h3> NAME , LAST NAME , IBAN , BALANCE    </h3>';
$URL =  Main\App::URL . 'addFunds';

if (!empty($list) ) {
foreach ($list as  $key => $user){
    echo  $user['Name'] . ' ' .  $user['Lastname'] .  ' ' . $user['iban'] .  ' ' . $user['balance']  ;
    echo   "<form action='$URL' method='post'>   
    <input type='text' name='value'>
    <button type='submit' name='id' value='$key' >ADD funds</button>
    </form> ";
    
}
}else { 
    echo 'no accounts added';
}
?>