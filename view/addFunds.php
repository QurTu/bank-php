<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Last Name</th>
      <th scope="col">First Name</th>
      <th scope="col">IBAN</th>
      <th scope="col">banlance</th>
      <th scope="col">   add funds </th>
    </tr>
  </thead>

<?php
 use Main\Currency;
use App\DB\DataBase;
use Main\App;
$AccList = new DataBase();
$URL =  Main\App::URL . 'addFunds';
$list =  $AccList->showAll();
$currency = new Currency();
echo "<h2 style=' text-align: center;'> ADD FUNDS </h2>";

if (!empty($list) ) {
foreach ($list as  $key => $user){

 ?>
   <tr>
      <th ><?= $user['Lastname']  ?></th>
      <td><?= $user['Name']  ?></td>
      <td><?= $user['iban']  ?></td>
      <td><?= $user['balance'] ?> €</td>
      
      
      <td>
          <form action='<?= $URL ?>' method='post'>
          <input type='number' name='value' placeholder=' €'>
            <button type='submit' name='id' value='<?= $key ?>' >add funds</button>
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










