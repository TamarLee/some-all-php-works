<!DOCTYPE html>
<html>
<head>
	<title>ავტორიზაცია</title>
	<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>

<?php

$name = $password = "";
$nameErr = $passwordErr = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
	if(empty($_POST["name"])) {
		$nameErr = "Name is required";
	} else {
		$name = test_input ($_POST["name"]);
	}
	if(empty($_POST["password"])) {
		$passwordErr = "Password is required";
	} else {
		$password = test_input ($_POST["password"]);
	}
}

function test_input ($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);

	return $data;
}
?>


<table>
	<tr>
		<th>ავტორიზაცია</th>
	</tr>
	<tr>
		<td>
			<div class="a1">
				სახელი:<br>
				პაროლი:<br>
				<br>
				<br>
			</div>
			<div class="a2">
				<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
					<input type="text" name="name">
					<br>
					<input type="password" name="password">
					<br>
					<br>
					<input type="submit" value="გაგზავნა">
				</form>
			</div>
		</td>
	</tr>
</table>


</body>
</html>

<?php
echo "თქვენი მონაცემები:<br>";
echo "$name<br>";
echo "$password<br>";
?>
