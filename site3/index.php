<?php
$servername = "localhost";
$username = "root";
$password = "";
$location = "database";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $location);
mysqli_set_charset($conn, "utf8");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

function data(){
  global $conn;
  $query = "SELECT * FROM `articles`";
  $data = mysqli_query($conn, $query);  
  while ($rows = mysqli_fetch_assoc($data)) {
    $arr[]= $rows;
  }
  return $arr;
}

function dataa(){
  global $conn;
  $query = "SELECT * FROM `menu`";
  $data = mysqli_query($conn, $query);  
  while ($rows = mysqli_fetch_assoc($data)) {
    $arr[]= $rows;
  }
  return $arr;
}
?>







<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>თამარ ლის საიტი</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/blog-home.css" rel="stylesheet">

  </head>

  <body>

  <?php 
  $arr = data();
  $array = dataa(); 
  ?>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">თამარ ლის საიტი</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <?php foreach ($array as $value): ?>
              <li class="nav-item active">
                <a class="nav-link" href="#"><?=$value["title"];?>
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

        <!-- Blog Entries Column -->
        <div class="col-md-8">

          <h1 class="my-4">შინაური ცხოველები</h1>


           <!-- Blog Post -->
          <?php foreach($arr as $key => $value):?>
          <div class="card mb-4">
            <img class="card-img-top" src="<?=$value['img'];?>" >
            <div class="card-body">
              <h2 class="card-title"><?=$value["title"];?></h2>
              <p class="card-text"><?=$value["description"];?></p>
              <a href="index2.php ?id=<?=$key;?>" class="btn btn-primary">მეტი &rarr;</a>
            </div>
            <div class="card-footer text-muted">
              <?=$value["date"];?> by
              <a href="#">თამარ ლი</a>
            </div>
          </div>
        <?php endforeach ?>

          <!-- Pagination -->
          <ul class="pagination justify-content-center mb-4">
            <li class="page-item">
              <a class="page-link" href="#">&larr; Older</a>
            </li>
            <li class="page-item disabled">
              <a class="page-link" href="#">Newer &rarr;</a>
            </li>
          </ul>

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

          <!-- Search Widget -->
          <div class="card my-4">
            <h5 class="card-header">ძიება</h5>
            <div class="card-body">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="ძიება...">
                <span class="input-group-btn">
                  <button class="btn btn-secondary" type="button">მიდი!</button>
                </span>
              </div>
            </div>
          </div>

          <!-- Categories Widget -->
          <div class="card my-4">
            <h5 class="card-header">კატეგორია</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <?php foreach($categories as $value): ?>
                    <li>
                      <a href="#"><?=$value?></a>
                    </li>
                    <?php endforeach ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!-- Side Widget -->
          <div class="card my-4">
            <h5 class="card-header">დღის ფრაზა</h5>
            <div class="card-body">
              ააარავის საქმეში არ ვერევი მე...
            </div>
          </div>

        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  </body>

</html>
