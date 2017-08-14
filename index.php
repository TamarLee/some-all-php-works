<?php
$year = "";
$month = "";
$day = "";
$age = 0;
if(!empty($_GET)){
$year = $_GET["year"];
$month = $_GET["month"];
$day = $_GET["day"];

$age = 2017 - $year;
if($age < 18){
echo "თქვენ ხართ არასრულწლოვანი!<br><hr><br>";
} else {
echo "თქვენ სრულწლოვანი ხართ! <br><hr>";
}

}

?>

<!DOCTYPE html>
<html>
<head>
<title>დაბადების დღე</title>
</head>
<body>
მონიშნეთ დაბადების თარიღი:
<br><br>
<form action="/" method="get">
	<select name="year">
		<?php for($i = 2017; $i >= 1900; $i--){ ?>
		<option value="<?=$i?>" <?php if($year==$i){echo "selected";}?>> <?php echo "$i"; ?> </option>
		<?php }?>
	</select>
	<select name="month">
		<?php for($i=1; $i<=12; $i++){ ?>
		<option value="<?=$i?>" <?php if($month==$i){echo "selected";}?>><?=$i?></option>
		<?php } ?>
	</select>
	<select name="day">
		<?php for($i=1; $i<=31; $i++){ ?>
		<option value="<?=$i?>" <?php if($day==$i){echo "selected";}?>><?=$i?></option>
		<?php } ?>
	</select>
	<input type="submit" value="გაგზავნა">
</form>

</body>
</html>