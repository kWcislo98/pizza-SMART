<?php
  session_start();
 ?>
<!DOCTYPE html>
<link rel="stylesheet" href="styling.css"/>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="XXXX">
    <title></title>
  </head>
  <body>
      <header>
          <nav>


            <ul>

              <li><a class="a" href="index.php">Strona Główna</a></li>
              <li><a class="a" href="about.php">O nas</a></li>
              <li><a class="a"href="locals.php">Lokale</a></li>
              <?php
               if (isset($_SESSION['userId'])){
                 echo '<li><a class="a" href="orderPizzas.php">STWÓRZ PIZZE</a> </li>
                 <li><a class="a" href="orders.php">Twoje zamowienia</a></li>
                 <li style="float:right"><form style="float:right" action="includes/logout.inc.php" method="post">
                    <button class="headerbut" type="submit" name="logout-submit">Wyloguj się</button>
                 </form></li>';
               }
               else {
                 echo ' <li style="float:right"><a class="b" style="float:right;" href="signup.php">Zarejestruj się</a></li>
                 <li style="float:right"> <form  style="float:right" action="includes/login.inc.php" method="post">
                     <input class="none"type="text" name="mailuid" placeholder="E-mail..." required>
                     <input class="none" type="password" name="pwd" placeholder="Hasło..." required>
                     <button class="headerbut" type="submit" name="login-submit">Zaloguj się</button>
                   </form></li>
                    ';
               }

               ?>
            </ul>



            </div>
          </nav>
      </header>
  </body>
</html>
