<!DOCTYPE html>
<html>
<head>
	<title>მთავარი გვერდი</title>
	<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>
<div class="main">
	<div class="notmain">
		სახელი: <br>
		გვარი: <br>
		პაროლი: <br><br>
	</div>
	<div class="notmain">
		<form action="submit.php" method="post">
			<input type="text" name="name">
			<input type="text" name="sname">
			<input type="password" name="password">
			<input type="submit" value="გაგზავნა" >
		</form>
	</div>
</div>
</body>
</html>