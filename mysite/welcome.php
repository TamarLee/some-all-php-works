<?php
    include_once 'data.php';
    $menu = data();
   
    $name = "";
    $lname = "";
    $email = "";
    $day = "";
    $month = "";
    $year = "";

    $error = "";

    if(!empty($_POST)){
        $name = $_POST['name'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $day = $_POST['day'];
        $month = $_POST['month'];
        $year = $_POST['year'];

        if(empty($name))
            $error .= "სახელი ცარიელია <br>";
        if(empty($lname))
            $error .= "გვარი ცარიელია <br>";
        if(empty($email))
            $error .= "მეილი ცარიელია <br>";

        if($_POST['pass'] !== $_POST['re_pass'] || empty($_POST['pass']) ){
            $error .= "პაროლები არ ემთხვევა";
        }

        if(empty($error)){
            $date = $year."-".$month."-".$day;
            $hash = hash('sha256', $_POST['pass']);
            $query = "INSERT INTO `users`(firstname, lastname, mail, bday, pass) VALUES ('$name','$lname','$email','$date','$hash')";
            mysqli_query($conn, $query);
           header("Location: reg.php?name=$name");
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
            <?php foreach($menu as $value): ?>
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

    <center style="color:red">    
        <br><br>
        <h4><?=$error?></h2>
    </center>
    <br>
    <!-- Page Content -->
    <div class="container">
    	<form action="" method="POST">
    	<p>
    	<H4>რეგისტრაცია</H4>
    	</p>
    	<br>
    	<p>
    		სახელი: <br>
    		<input type="text" name="name" value="<?=$name?>">
    	</p>
    	<p>
    		გვარი: <br>
    		<input type="text" name="lname" value="<?=$lname?>">
    	</p>
    	<p>
    		მეილი: <br>
    		<input type="email" name="email" value="<?=$email?>">
    	</p>
    	<p>
    		დაბადების თარიღი:  <br>
    		<select name="day">
    			<?php for($i=1; $i<=31; $i++){ ?>
    			<option <?php if($day == $i) echo"selected";?>>
                    <?=$i;?>
                </option>
    			<?php }?>
    		</select>
    		<select name="month">
    			<?php for($i=1; $i<=12; $i++){ ?>
    			<option <?php if($month == $i) echo"selected";?>>
                    <?=$i;?></option>
    			<?php }?>
    		</select>
    		<select name="year">
    			<?php for($i=1900; $i<=2017; $i++){ ?>
    			<option <?php if($year == $i) echo"selected";?>>
                    <?=$i;?></option>
    			<?php }?>
    		</select>
    	</p>
    	<p>
    		პაროლი: <br>
    		<input type="password" name="pass">
    	</p>
    	<p>
    		გაიმეორეთ პაროლი: <br>
    		<input type="password" name="re_pass">
    	</p>
    	<p>
    		<input type="submit" value="რეგისტრაცია">
    	</p><br><br><br>
    	</form>
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
