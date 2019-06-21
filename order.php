<?php
 require "header.php";
 ?>
 <?php
 $idP=$_GET['idPizzas'];
 $pricePizzas=$_GET['pricePizzas'];
 $idA=$_GET['idA'];
 $additivesPrice=$_GET['additivesPrice'];
 if (isset($_SESSION['userId'])){

      echo '<div class="form">
      <h1>Potwierdź zamówienie</h1>

      <form action="includes/order.inc.php" method="post"class="containerO" >
      <input type="hidden" id="custId" name="idP" value="'.$idP.'">
       <input type="hidden" id="custId" name="pricePizzas" value="'.$pricePizzas.'">
       <input type="hidden" id="custId" name="idA" value="'.$idA.'">
        <input type="hidden" id="custId" name="additivesPrice" value="'.$additivesPrice.'">
      <button class="btn" type="submit" name="orderAdditives-submit">Potwierdzam</button>
     </form></div>';



  }

  else {
    header("Location: index.php");
  }


  ?>
