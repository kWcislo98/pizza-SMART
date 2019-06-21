<?php
$servername ="localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "smart";

$conn=mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
  die("Połączenie nie powiodło się!".mysqli_connect_error());
  }





 ?>
