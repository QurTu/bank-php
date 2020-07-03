<?php
use App\DB\DataBase;
use Main\App;
$AccList = new DataBase();
$list =  $AccList->showAll();
echo '<h2> List of accounts: </h2>';
echo '<h3> NAME , LAST NAME , IBAN , BALANCE    </h3>';
$URL =  Main\App::URL;

if (!empty($list) ) {
foreach ($list as  $key => $user){
    echo  $user['Name'] . ' ' .  $user['Lastname'] .  ' ' . $user['iban'] .  ' ' . $user['balance']  ;
    $acc =  "<form action='$URL' method='post'>
    <button type='submit' name='delete' value='$key' >delete</button>
    
    </form> ";
    echo $acc;
}
}else { 
    echo 'no accounts added';
}
?>
