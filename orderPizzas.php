<?php
 require "header.php";
 ?>
 <?php
 if (isset($_SESSION['userId'])){
   echo '<div class="form">
   <h1>Zacznijmy tworzenie!</h1>
   <p>Najpierw wybierz składniki i rodzaj ciasta</p>
   <p>Nastepnie dobierz dodatki i sosy</p>
   <h1>To takie proste!</h1>


   <form action="includes/orderPizzas.inc.php" method="post" class="containerP" >
      Rozmiar <br>
      <input list="size" name="size" placeholder="wybierz" required>
      <datalist id="size">
          <option value="30cm">
          <option value="45cm">
          <option value="60cm">
          </datalist><br>
        Ciasto <br>
        <input list="type" name="type" placeholder="wybierz">
        <datalist id="type">
            <option value="Cienkie">
            <option value="Tradycyjne">
            <option value="Grube">
            </datalist><br>

      Składnik 1.<br>
        <input type="radio" name="f1" value="Szynka" id="Szynka" checked`>
              <label for="Szynka">Szynka</label>
          <input type="radio" name="f1" value="Salami" id="Salami" required>
              <label for="Salami">Salami</label>
          <input type="radio" name="f1" value="Bekon" id="Bekon"required>
              <label for="Bekon">Bekon</label>
          <input type="radio" name="f1" value="Kurczak" id="Kurczak"required>
              <label for="Kurczak">Kurczak</label>
          <input type="radio" name="f1" value="Pieczarki" id="Pieczarki"required>
              <label for="Pieczarki">Pieczarki</label>
          <input type="radio" name="f1" value="Cebula" id="Cebula"required>
              <label for="Cebula">Cebula</label>
          <input type="radio" name="f1" value="Pomidor" id="Pomidor"required>
              <label for="Pomidor">Pomidor</label>
          <input type="radio" name="f1" value="Papryka" id="Papryka"required>
              <label for="Papryka">Papryka</label>
          <input type="radio" name="f1" value="Ananas" id="Ananas"required>
              <label for="Ananas">Ananas</label><br>



        Składnik 2.<br>
        <input type="radio" name="f2" value="Brak" id="Brak2" checked>
              <label for="Brak2">Brak</label>
        <input type="radio" name="f2" value="Szynka" id="Szynka2"required>
              <label for="Szynka2">Szynka</label>
          <input type="radio" name="f2" value="Salami" id="Salami2"required>
              <label for="Salami2">Salami</label>
          <input type="radio" name="f2" value="Bekon" id="Bekon2"required>
              <label for="Bekon2">Bekon</label>
          <input type="radio" name="f2" value="Kurczak" id="Kurczak2"required>
              <label for="Kurczak2">Kurczak</label>
          <input type="radio" name="f2" value="Pieczarki" id="Pieczarki2"required>
              <label for="Pieczarki2">Pieczarki</label>
          <input type="radio" name="f2" value="Cebula" id="Cebula2"required>
              <label for="Cebula2">Cebula</label>
          <input type="radio" name="f2" value="Pomidor" id="Pomidor2"required>
              <label for="Pomidor2">Pomidor</label>
          <input type="radio" name="f2" value="Papryka" id="Papryka2"required>
              <label for="Papryka2">Papryka</label>
          <input type="radio" name="f2" value="Ananas" id="Ananas2"required>
              <label for="Ananas2">Ananas</label><br>
        Składnik 3.<br>
        <input type="radio" name="f3" value="Brak" id="Brak3" checked>
              <label for="Brak3">Brak</label>
        <input type="radio" name="f3" value="Szynka" id="Szynka3"required>
              <label for="Szynka3">Szynka</label>
          <input type="radio" name="f3" value="Salami" id="Salami3"required>
              <label for="Salami3">Salami</label>
          <input type="radio" name="f3" value="Bekon" id="Bekon3"required>
              <label for="Bekon3">Bekon</label>
          <input type="radio" name="f3" value="Kurczak" id="Kurczak3"required>
              <label for="Kurczak3">Kurczak</label>
          <input type="radio" name="f3" value="Pieczarki" id="Pieczarki3"required>
              <label for="Pieczarki3">Pieczarki</label>
          <input type="radio" name="f3" value="Cebula" id="Cebula3"required>
              <label for="Cebula3">Cebula</label>
          <input type="radio" name="f3" value="Pomidor" id="Pomidor3"required>
              <label for="Pomidor3">Pomidor</label>
          <input type="radio" name="f3" value="Papryka" id="Papryka3"required>
              <label for="Papryka3">Papryka</label>
          <input type="radio" name="f3" value="Ananas" id="Ananas3"required>
              <label for="Ananas3">Ananas</label><br>
        Składnik 4.<br>
        <input type="radio" name="f4" value="Brak" id="Brak4" checked>
              <label for="Brak4">Brak</label>
        <input type="radio" name="f4" value="Szynka" id="Szynka4"required>
              <label for="Szynka4">Szynka</label>
          <input type="radio" name="f4" value="Salami" id="Salami4"required>
              <label for="Salami4">Salami</label>
          <input type="radio" name="f4" value="Bekon" id="Bekon4"required>
              <label for="Bekon4">Bekon</label>
          <input type="radio" name="f4" value="Kurczak" id="Kurczak4"required>
              <label for="Kurczak4">Kurczak</label>
          <input type="radio" name="f4" value="Pieczarki" id="Pieczarki4"required>
              <label for="Pieczarki4">Pieczarki</label>
          <input type="radio" name="f4" value="Cebula" id="Cebula4"required>
              <label for="Cebula4">Cebula</label>
          <input type="radio" name="f4" value="Pomidor" id="Pomidor4"required>
              <label for="Pomidor4">Pomidor</label>
          <input type="radio" name="f4" value="Papryka" id="Papryka4"required>
              <label for="Papryka4">Papryka</label>
          <input type="radio" name="f4" value="Ananas" id="Ananas4"required>
              <label for="Ananas4">Ananas</label><br>
       Składnik 5.<br>
       <input type="radio" name="f5" value="Brak" id="Brak5"checked>
             <label for="Brak5">Brak</label>
       <input type="radio" name="f5" value="Szynka" id="Szynka5"required>
             <label for="Szynka5">Szynka</label>
         <input type="radio" name="f5" value="Salami" id="Salami5"required>
             <label for="Salami5">Salami</label>
         <input type="radio" name="f5" value="Bekon" id="Bekon5"required>
             <label for="Bekon5">Bekon</label>
         <input type="radio" name="f5" value="Kurczak" id="Kurczak5"required>
             <label for="Kurczak5">Kurczak</label>
         <input type="radio" name="f5" value="Pieczarki" id="Pieczarki5"required>
             <label for="Pieczarki5">Pieczarki</label>
         <input type="radio" name="f5" value="Cebula" id="Cebula5"required>
             <label for="Cebula5">Cebula</label>
         <input type="radio" name="f5" value="Pomidor" id="Pomidor5"required>
             <label for="Pomidor5">Pomidor</label>
         <input type="radio" name="f5" value="Papryka" id="Papryka5"required>
             <label for="Papryka5">Papryka</label>
         <input type="radio" name="f5" value="Ananas" id="Ananas5"required>
             <label for="Ananas5">Ananas</label><br><br>

     <button class="btnP" type="submit" name="orderPizzas-submit">Zamów!</button>
   </form>
   </div class="form">';


 }

 else {
   header("Location: index.php");
 }


 ?>
