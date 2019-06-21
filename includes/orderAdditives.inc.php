<?php
if (isset($_POST['orderAdditives-submit'])) {
  require 'dbh.inc.php';
  $drink= $_POST['drink'];
  $sauce= $_POST['sauce'];
  $idP=$_POST['idP'];
  $pricePizzas=$_POST['pricePizzas'];
  $additivesPrice=0;
  if($drink=="Brak" && $sauce=="Brak")
  {
    $additivesPrice=0;
  }
  else if ($drink!="Brak" && $sauce!="Brak") {
    $additivesPrice=6;
  }
  else if ($drink!="Brak" && $sauce=="Brak") {
    $additivesPrice=3;
  }
  else if ($drink=="Brak" && $sauce!="Brak") {
    $additivesPrice=3;
  }
  $sql="INSERT INTO additives (drink, sauce, additivesPrice) VALUES (?,?,?)";
  $stmt =mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
          header("Location: ../orderAdditives.php?error=sqlerror");
          exit();
      }
    else {

          mysqli_stmt_bind_param($stmt, "ssi", $drink, $sauce,$additivesPrice);
          mysqli_stmt_execute($stmt);

          $idA=mysqli_insert_id($conn);
          header("Location: ../order.php?idPizzas=$idP&pricePizzas=$pricePizzas&idA=$idA&additivesPrice=$additivesPrice");
          exit();
}


}
else {
    header("Location: ../index.php");
exit();
}

mysqli_close($conn);


?>
