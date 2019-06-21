  <?php
 require "header.php";
 ?>
   <main>
     <body>
       <section>


     <div class="index">
       <p style="text-align:center">WITAMY W PIZZA SMART</p>
     <?php
     if (isset($_SESSION['userId'])) {
       echo '<p class="indexp">Jesteś zalogowany<br>Nie zwklekaj ani chwili dlużej! Przejdz do tworzenia pizzy!
       <br> <a  href="orderPizzas.php">Kliknij tutaj</a><br>
       Nie masz pomysłu na swoją pizzę?<br>Sprawdź swoje poprzednie zamówienia aby odnaleźć inspirację </p>';
     }
     else {
       echo '<p class="indexp">Jesteś wylogowany<br>
       Aby zamówić pizze musisz byc zalogowany!</p>';
     }


       ?>
       </div>
        </section>

     </body>
   </main>
