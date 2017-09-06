<?php

 if (!isset($_SESSION["uid"]) || empty($_SESSION["uid"])){ ?>
  
    <p>
    <strong>ავტორიზაცია</strong>
    </p>
    <form action='index.php' method='post'>
      <input type='email' name='email' placeholder='მეილი'>
      <br>
      <input type='password' name='pass' placeholder='პაროლი'>
      <br>
      <input type='submit' name="auth" value='შესვლა'><br>
    </form>
    <form action='welcome.php' method='get'>
      <button>რეგისტრაცია</button><br>
    </form>
<?php } else { ?>

  მოგესალმებით <?=$_SESSION["name"]?> <?=$_SESSION["lname"]?>

  <br><br>
  <a href="/mysite/logout.php">Logout</a>
<?php } ?>