<?php
$mon = "";


$months = array(
0 => "იანვარი",
1 => "თებერვალი",
2 => "მარტი",
3 => "აპრილი",
4 => "მაისი",
5 => "ივნისი",
6 => "ივლისი",
7 => "აგვისტო",
8 => "სექტემბერი",
9 => "ოქტომბერი",
10 => "ნოემბერი",
11 => "დეკემბერი",
);

if(!empty($_GET)){
	$mon = $_GET["month"];
}
?>

<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>

<form action="/" method="get">
<select name="month">
<?php for($i=0; $i<count($months); $i++){?>
<option value="<?=$i?>"" <?php if($mon==$i){echo "selected";} ?>>
<?=$months[$i]?>
</option>
<?php }?>
</select>
<input type="submit" value="გაგზავნა">
</form>
</body>
</html>