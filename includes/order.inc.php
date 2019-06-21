<?php
ini_set( 'error_reporting', E_ALL);
ini_set('display_error', true);
if (isset($_POST['orderAdditives-submit'])) {
  require 'dbh.inc.php';
  $idP=$_POST['idP'];
  $pricePizzas=$_POST['pricePizzas'];
  $idA=$_POST['idA'];
  $additivesPrice=$_POST['additivesPrice'];
  session_start();
  $idU=$_SESSION['userId'];
  $orderPrice=$pricePizzas+$additivesPrice;
  $sql="INSERT INTO orders (idPizzas, idUsers, idAdditives,orderPrice) VALUES (?,?,?,?)";
  $stmt =mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
          header("Location: ../order.php?error=sqlerror");
          exit();
      }
      else {

            mysqli_stmt_bind_param($stmt, "iiii", $idP,$idU,$idA,$orderPrice);
            mysqli_stmt_execute($stmt);
            $idO=mysqli_insert_id($conn);

            header("Location: ../succeesord.php?idUsers=$idU&idO=$idO&orderPrice=$orderPrice");
            exit();
          }}



  else {
      header("Location: ../index.php");
  exit();
  }

  mysqli_close($conn);


  ?>
