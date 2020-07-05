
<a href="/bank/public"> Home</a>
<a href="/bank/public/addAcc"> Add acount</a>
<a href="/bank/public/addFunds">Add funds</a>
<a href="/bank/public/takeFunds">Take funds</a>

<?php 
use Main\App ;
if($_SESSION['login'] == 1) {
   ?>
   <form action="<?= Main\App::URL  ?>" method="post">
<button type="submit" name ='logout' value = '0'>LOG OUT</button>
</form>
   <?php
} 
