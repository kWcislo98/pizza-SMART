<?php
 require "header.php";
 ?>
 <?php
 $idP=$_GET['idPizzas'];
 $pricePizzas=$_GET['pricePizzas'];
 if (isset($_SESSION['userId'])){
      echo '<div class="form">
      <h1>Dobierz Dodatki!</h1>
      <p>Wybierz napój oraz sos</p>


 <form action="includes/orderAdditives.inc.php" method="post" class="containerA" >
  <input type="hidden" id="custId" name="idP" value="'.$idP.'">
   <input type="hidden" id="custId" name="pricePizzas" value="'.$pricePizzas.'">
Napój<br>
<input list="drink" name="drink" placeholder="Brak" required>
<datalist id="drink">
           <option value="Brak">
           <option value="Woda niegazowana 1l">
           <option value="Woda gazowana 1l">
           <option value="Coca-cola 1l">
           <option value="Fanta 1l">
           <option value="Sprite 1l">
           <option value="Sok jabłkowy 1l">
           <option value="Sok pomarańczowy 1l">
           </datalist><br><br>
 Dodatkowy sos<br>
 <input list="sauce" name="sauce" placeholder="Brak" required>
 <datalist id="sauce">
            <option value="Brak">
            <option value="Czosnkowy">
            <option value="Pomidorowy">
            <option value="Bbq">
            <option value="Jalapeno">
            </datalist><br>
           <button class="btnA" type="submit" name="orderAdditives-submit">Zamów!</button>
          </form></div>';

   }

   else {
     header("Location: index.php");
   }


   ?>
