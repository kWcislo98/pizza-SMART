<?php
  require "header.php";
 ?>
 <?php
 require 'includes/dbh.inc.php';
  if (isset($_SESSION['userId'])){

     $idUsers=$_SESSION['userId'];
     $sql="SELECT * from orders LEFT JOIN  pizzas USING(idPizzas) LEFT JOIN additives USING(idAdditives)
     WHERE idUsers=$idUsers;";

      $result=mysqli_query($conn,$sql);
      $resultCheck=mysqli_num_rows($result );
      if ($resultCheck>0) {
        while($row=mysqli_fetch_assoc($result)) {
          echo '<div class="form"> <h1>Cena zamówienia: '.$row['orderPrice'].'zł, składniki:'.$row['f1Pizzas'].' '.$row['f2Pizzas'].' '.$row['f3Pizzas'].' '.$row['f4Pizzas'].' '.$row['f5Pizzas'].'
          <br>  Napój: '.$row['drink'].', sos: '.$row['sauce'].'<br>Godzina:'.$row['orderDate'];
        }
      }
      else {
        echo 'Nie dokonales jeszcze zamowienia';
      }
  }
  else {
    header("Location: index.php");
  }


  ?>
