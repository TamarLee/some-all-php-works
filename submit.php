<!DOCTYPE html>
<html>
<head>
	<title>მეორე გვერდი</title>
	<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>
<?php
if(!empty($_POST)){
	echo "მოგესალმებით საიტზე, ".$_POST["name"]."!";



} else { 
	die();}

?>
<br>
<hr>
გთხოვთ, მოგვწეროთ თქვენი მოსაზრება ნებისმიერ საკითხზე: 
<br>
<br>
<form action="third.php" method="get">
	<textarea name="text" style="width:200px;height:100px;"></textarea>
	<input type="submit" value="გაგზავნა">
</form>

</body>
</html>