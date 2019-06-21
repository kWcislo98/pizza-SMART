<?php
 require "header.php";
 ?>
<?php
$idO=$_GET['idO'];
$orderPrice=$_GET['orderPrice'];
  if (isset($_SESSION['userId'])){

  $startTime = date("H:i:s");
  $cenvertedTime = date('H:i',strtotime('+50 minutes',strtotime($startTime)));


 echo'   <main>
     <div class="form">
       <h1>Zamowienie zakończone sukcesem!</h1>
       <p>Identyfikator zamówienia: '.$idO.' <br>Cena zamówienia: '.$orderPrice.'zł
       <br>Spodziewaj się naszej pizzy do godziny: '.$cenvertedTime.'</p>
       <a href="index.php">Wróc do Strony Głównej</a>
     </div> </main>';



 }
   else {
     header("Location: index.php");
   }
    ?>
