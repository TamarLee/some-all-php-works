<?php 
session_start();
include "data.php";

$arr = data();
$arr2 = data2();
$arr3 = data3();

if (isset($_POST["auth"])) {
    $uData = getUser($_POST["email"],hash('sha256', $_POST['pass'])); 
    if($uData != 0){
     $_SESSION["uid"] = $uData['id'];
     $_SESSION["name"] = $uData['firstname'];
     $_SESSION["lname"] = $uData['lastname'];
    }
}
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

    <!-- categories -->
    <div class="row" style="padding: 20px 50px;">
      <?php foreach($arr2 as $key => $value): ?> 
        <div class="col-sm-4 my-4" style="display: inline-block;">
          <div class="card">
            <a href="#">
            <img class="card-img-top" src="<?=$value["img"]?>" alt="">
            <div class="card-body">
              <h4 class="card-title"><?=$value["title"]?></h4>
            </a>
              <p class="card-text"><?=$value["description"]?></p>
            </div> 
          </div>
        </div> 
        <?php endforeach?>    
      </div>

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
