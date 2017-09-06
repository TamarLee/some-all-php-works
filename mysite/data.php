<?php
$servername = "localhost";
$username = "root";
$password = "";
$location = "mysite";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $location);
mysqli_set_charset($conn, "utf8");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

function data(){
  global $conn;
  $query = "SELECT * FROM `mysitemenu`";
  $data = mysqli_query($conn, $query);  
  while ($rows = mysqli_fetch_assoc($data)) {
    $arr[]= $rows;
  }
  return $arr;
}

function data2(){
  global $conn;
  $query = "SELECT * FROM `articles`";
  $data = mysqli_query($conn, $query);  
  while ($rows = mysqli_fetch_assoc($data)) {
    $arr[]= $rows;
  }
  return $arr;
}

function data3(){
  global $conn;
  $query = "SELECT * FROM `users`";
  $data = mysqli_query($conn, $query);  
  while ($rows = mysqli_fetch_assoc($data)) {
    $arr[]= $rows;
  }
  return $arr;
}

function getUser($mail,$password){
  global $conn;
  $query = "SELECT * FROM `users` Where `mail`='$mail' AND `pass`='$password'";
  $data = mysqli_query($conn, $query);  
  if (mysqli_num_rows($data) > 0) 
    while ($rows = mysqli_fetch_assoc($data)) {
      $arr[]= $rows;
    }
  else return 0;
  return $arr[0];
}


?>