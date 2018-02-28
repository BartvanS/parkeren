<?php
session_start();
include './connect_db.php';
$sql = "SELECT * FROM `users` WHERE `email` = '".$_POST["email"]."'";
$result = mysqli_query($conn, $sql);
$row = $result->fetch_array(MYSQLI_NUM);
var_dump($row);
if($row[1] == $_POST["email"]){
  $_SESSION['typeofuser'] = $row[4];


  header("location: http://localhost/odijk/project/index.php?content=overzichtklant");
  echo $_SESSION['typeofuser'];
}else{
  header("location: ./inloggen.php");
}
