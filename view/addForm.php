


<h2>ADD NEW ACCOUNT</h2>
<form action="<?= Main\App::URL . 'addAcc' ?>" method="post">
<input type="text" name="Name">  Name<br>
<input type="text" name="Lastname"> Last Name<br>
<input type="text" name="id"> Personal ID<br>
<input type="text" name="iban"> IBAN<br>
<button type="submit">Add acount</button>
</form>