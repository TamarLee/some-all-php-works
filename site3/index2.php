<?php include "data.php"; ?>
<?php 
    $id = '';

    if(!empty($_GET)){
        $id = $_GET['id'];
    }else header('Location: /');

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

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">თამარ ლის საიტი</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <?php foreach ($menu as $value):?>
              <li class="nav-item active">
                <a class="nav-link" href="#"><?=$value['title'];?>
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

          <!-- Title -->
          <h1 class="mt-4"><?=$articles[$id]["title"]?></h1>

          <!-- Author -->
          <p class="lead">
            by
            <a href="#">თამარ ლი</a>
          </p>

          <hr>

          <!-- Date/Time -->
          <p>30 აგვისტო 2017</p>

          <hr>

          <!-- Preview Image -->
          <img class="img-fluid rounded" src="<?=$articles[$id]["img"]?>" alt="">

          <hr>

          <!-- Post Content -->
          <p class="lead"><?=$articles[$id]["text"]?></p>

          <blockquote class="blockquote">
            <p class="mb-0">ძაან მაგარი საიტი თუ არ იყოს...</p>
            <footer class="blockquote-footer">თამარ ლი 
            </footer>
          </blockquote>
          <hr>

          <!-- Comments Form -->
          <div class="card my-4">
            <h5 class="card-header">დატოვეთ კომენტარი:</h5>
            <div class="card-body">
              <form>
                <div class="form-group">
                  <textarea class="form-control" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">გაგზავნა</button>
              </form>
            </div>
          </div>

          <!-- Single Comment -->
          <div class="media mb-4">
            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
            <div class="media-body">
              <h5 class="mt-0">მავანი</h5>
              გენიოსი ხარ!
            </div>
          </div>

          <!-- Comment with nested comments -->
          <div class="media mb-4">
            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
            <div class="media-body">
              <h5 class="mt-0">თამარ ლი</h5>
              ჩემთვის ეს უბრალო ოპერაციაა.

            </div>
          </div>

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
            <h5 class="card-header">კატეგორიები</h5>
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
