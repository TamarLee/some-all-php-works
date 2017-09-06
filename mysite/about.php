<?php 
session_start();
include "data.php";

$arr = data();
$arr2 = data2();
$arr3 = data3();


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

    <!-- Header with Background Image -->
    <header class="business-header">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <img src="http://www.icacie.com/2017/images/slider/05.jpg">
          </div>
        </div>
      </div>
    </header>

    <!-- Page Content -->
    <div class="container">

      <div class="row">
        <div class="col-sm-8">
          <h2 class="mt-4">ჩვენს შესახებ</h2>
          <p>სინამდვილეში ჯერჯერობით არანაირი ჩვენ არ არსებობს. მე ვარ მხოლოდ, თამარ მეხრიშვილი, ვისაც მომწყინდა ჩაკეტილ და განუვითარებელ გარემოში ცხოვრება და გადავწყვიტე თავად განვვითარდე და შევცვალო გარემო ჩემს გარშემო.</p>
          <p>განვითარებისთვის საჭირო ინსტრუმენტად კი ვებ პროგრამირების შესწავლა მიმაჩნია. ამ საიტზეც ბევრ მასალას იხილავთ სწორედ ამ საკითხის შესახებ.</p>
          <p>
            <a class="btn btn-primary btn-lg" href="welcome.php">შემომიერთდი &raquo;</a>
          </p>
          <br>
          <br>
        </div>
        <div class="col-sm-4">
        <br>
            <?php include_once 'inc/auth.php'; ?>
          
        </div>
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





?>