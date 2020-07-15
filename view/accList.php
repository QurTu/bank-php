<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Last Name</th>
      <th scope="col">First Name</th>
      <th scope="col">IBAN</th>
      <th scope="col">banlance</th>
      <th scope="col">banlance</th>
      <th scope="col">   delete account </th>
    </tr>
  </thead>

<?php
 use Main\Currency;
use App\DB\DataBase;
use Main\App;
$AccList = new DataBase();
$URL =  Main\App::URL;
$list =  $AccList->showAll();
$currency = new Currency();
echo "<h2 style=' text-align: center;'> LIST OF ACCOUNTS </h2>";

if (!empty($list) ) {
foreach ($list as  $key => $user){

 ?>
   <tr>
      <th ><?= $user['Lastname']  ?></th>
      <td><?= $user['Name']  ?></td>
      <td><?= $user['iban']  ?></td>
      <td><?= $user['balance'] ?> €</td>
      <td><?=   round( $user['balance'] * $currency->rate(), 2 )?> $</td>
      <td>
          <form action='<?= $URL ?>' method='post'>
            <button type='submit' name='delete' value='<?= $key ?>' >delete</button>
        </form>
        </td>
    </tr>
<?php
}
}else { 
    echo 'no accounts added';
}
?>
  </tbody>
</table>