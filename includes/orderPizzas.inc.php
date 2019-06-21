<?php

if (isset($_POST['orderPizzas-submit'])) {

  require 'dbh.inc.php';
    $type= $_POST['type'];
    $size= $_POST['size'];
    $f1= $_POST['f1'];
    $f2= $_POST['f2'];
    $f3= $_POST['f3'];
    $f4= $_POST['f4'];
    $f5= $_POST['f5'];
    $pricePizzas=0;
  


    if ($size=="30cm") {

        if ($f2=="Brak" && $f3=="Brak" && $f4=="Brak"&&$f5=="Brak") {
        $pricePizzas=21;
      }
          if ($f2!="Brak" && $f3=="Brak" && $f4=="Brak"&&$f5=="Brak") {
            $pricePizzas=24;
          }

          else if($f2!="Brak" && $f3!="Brak" && $f4=="Brak"&&$f5=="Brak")
          {
            $pricePizzas=27;
          }
          else if($f2!="Brak" && $f3!="Brak" && $f4!="Brak"&&$f5=="Brak")
          {
            $pricePizzas=30;
          }
          else if ($f2!="Brak" && $f3!="Brak" && $f4!="Brak"&&$f5!="Brak")  {
            $pricePizzas=33;

      }
    }
    else if($size=="45cm")
    {
          if ($f2=="Brak" && $f3=="Brak" && $f4=="Brak"&&$f5=="Brak") {
            $pricePizzas=24;
          }

          else if ($f2!="Brak" && $f3=="Brak" && $f4=="Brak"&&$f5=="Brak") {
            $pricePizzas=27;
          }

          else if($f2!="Brak" && $f3!="Brak" && $f4=="Brak"&&$f5=="Brak")
          {
            $pricePizzas=30;
          }
          else if($f2!="Brak" && $f3!="Brak" && $f4!="Brak"&&$f5=="Brak")
          {
            $prizePizzas=32;
          }
          else if ($f2!="Brak" && $f3!="Brak" && $f4!="Brak"&&$f5!="Brak")  {
            $pricePizzas=35;
          }

    }
    else if($size=="60cm")
    {
      if ($f2=="Brak" && $f3=="Brak" && $f4=="Brak"&& $f5=="Brak") {
        $pricePizzas=30;
      }

          if ($f2!="Brak" && $f3=="Brak" && $f4=="Brak"&& $f5=="Brak") {
            $pricePizzas=33;
          }

          else if($f2!="Brak" && $f3!="Brak" && $f4=="Brak"&&$f5=="Brak")
          {
            $pricePizzas=36;
          }
          else if($f2!="Brak" && $f3!="Brak" && $f4!="Brak"&&$f5=="Brak")
          {
            $pricePizzas=39;
          }
          else if ($f2!="Brak" && $f3!="Brak" && $f4!="Brak"&&$f5!="Brak")  {
            $pricePizzas=42;
          }

    }

    $sql="INSERT INTO pizzas (typePizzas, sizePizzas, f1Pizzas, f2Pizzas, f3Pizzas, f4Pizzas, f5Pizzas,pricePizzas) VALUES (?,?,?,?,?,?,?,?)";
    $stmt =mysqli_stmt_init($conn);
      if (!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../orderPizzas.php?error=sqlerror");
            exit();
        }
      else {

            mysqli_stmt_bind_param($stmt, "sssssssi", $type, $size, $f1, $f2, $f3, $f4, $f5,$pricePizzas);
            mysqli_stmt_execute($stmt);
            $idP=mysqli_insert_id($conn);


            header("Location: ../orderAdditives.php?idPizzas=$idP&pricePizzas=$pricePizzas");

            exit();
}
}
else {
  header("Location: ../index.php");
  exit();
}

mysqli_close($conn);

?>
