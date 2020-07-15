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
  <div class="container my-5 px-0 z-depth-1">

<!--Section: Content-->
<section class="p-5 my-md-12 text-center" 
  style="background-image: url(https://mdbootstrap.com/img/Photos/Others/background.jpg); background-size: cover; background-position: center center;">

  <div  style="height: 350px;">   
      <img style="height: 300px;" src="./img/bank.jpg" alt="bank logo">
  </div>

    <div class="row">
      <div class="col-md-6 mx-auto">
        <!-- Material form login -->
        <div class="card">

          <!--Card content-->
          <div class="card-body">

        

            <!-- Form -->
            <form method="post" class="text-center" style="color: #751575" action="<?= Main\App::URL . 'login' ?>" >
              <h3 class="font-weight-bold my-4 pb-2 text-center dark-grey-text">To access bank you need to login</h3>

              <!-- Name -->
              <input type="text" name="name"  class="form-control mb-4" placeholder="Name">

              <!-- Email -->
              <input type="password" name="pass" class="form-control" placeholder="Password">
             

              <div class="text-center">
                <button type="submit" class="btn btn-outline-orange btn-rounded my-4 waves-effect">Login</button>
              </div>

            </form>
            <!-- Form -->

          </div>

        </div>
        <!-- Material form login -->
      </div>
    </div>

  </form>

</section>
<!--Section: Content-->


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





