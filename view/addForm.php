
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design for Bootstrap</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="./bootsrap/css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="./bootsrap/css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="./bootsrap/css/style.css">
</head>
<body>

  <!-- Start your project here-->  
<div style="width: 500px;">      >

<form class="text-center  p-5" action="<?= Main\App::URL . 'addAcc' ?>" method="post">

<p class="h4 mb-4">Add new account</p>


<input type="text" name="Name"class="form-control mb-4" placeholder="Name" > 
<input type="text" name="Lastname" class="form-control mb-4" placeholder=" Last Name"> 
<input type="text" name="id"class="form-control mb-4" placeholder="Personal ID"> 
<input type="text" name="iban"class="form-control mb-4" placeholder="IBAN"> 



<!-- Sign in button -->
<button class="btn btn-info btn-block" type="submit">Add Account</button>


</form>
<!-- Default form subscription -->
</div>

  <!-- End your project here-->

  <!-- jQuery -->
  <script type="text/javascript" src="./bootsrapjs/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="./bootsrapjs/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="./bootsrapjs/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="./bootsrapjs/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>

</body>
</html>












