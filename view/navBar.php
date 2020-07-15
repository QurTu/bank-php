
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

  <ul class="nav grey lighten-4 py-4">
  <li class="nav-item">
    <a class="nav-link active" href="/bank/public">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/bank/public/addAcc">Add acount</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/bank/public/addFunds">Add funds</a>
  </li>
  <li class="nav-item">
    <a class="nav-link "href="/bank/public/takeFunds">Widthdrow funds</a>
  </li>
  <li class="nav-item">
  <form action="<?= Main\App::URL  ?>" method="post">
<button type="submit" name ='logout' value = '0'>LOG OUT</button>
</form>


  </li>
</ul>
  

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



