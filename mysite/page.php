<?php 
session_start();
include "data.php";

$arr = data();
$arr2 = data2();
?>


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>თვითგანვითარება</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/business-frontpage.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">თვითგანვითარება</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <?php foreach($arr as $value): ?>
              <li class="nav-item active">
                <a class="nav-link" href="<?=$value["link"];?>"><?=$value["title"];?>
                  <span class="sr-only">(current)</span>
                </a>
              </li>
            <?php endforeach ?>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">
        <?php $i = $_GET["id"];?>
          <!-- Title -->
          <h1 class="mt-4"><?=$arr2[$i]["title"]?></h1>


          <!-- Author -->
          <p class="lead">
            <?=$arr2[$i]["date"]?>by
            <a href="#"> თამარ ლი</a>
          </p>

          <hr>

          <!-- Date/Time -->
          <p></p>

          <hr>

          <!-- Preview Image -->
          <img class="img-fluid rounded" src="<?=$arr2[$i]["img"]?>" alt="">

          <hr>

          <!-- Post Content -->
          <p class="lead"><?=$arr2[$i]["text"]?></p>

          <br>
          <br>
          <br>

          

        

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; თამარ მეხრიშვილი 
        <br><central>2017</central></p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  </body>

</html>