<?php
 require "header.php";
 ?>
   <main>
     <div>
       <section>

    <?php
      if (isset($_GET['error'])) {
        if ($_GET['error'] =="passwordcheck") {
          echo '<p class="error"> Hasła różnią się od siebie!</p>';
        }
        else if ($_GET['error']=="useroremailtaken") {
          echo '<p class="error">Wybrany login lub e-mail jest już zajęty!</p>';
        }
      }

      ?>
      <div class="form">

<h1>Zarejestruj się!</h1>
     <form class="containerR" action="includes/signup.inc.php" method="post" required><br>
       <input class="input"type="text" name="uid" placeholder="Login" minlength="5" required><br>
       <input class="input"  type="email" name="mail" placeholder="E-mail" required ><br>
    <input class="input"  type="password" name="pwd" placeholder="Hasło" minlength="5" required>
    <br>   <input class="input" type="password" name="pwd-repeat" placeholder="Powtórz hasło" minlength="5" required>
       <br><input class="input" type="text" name="adr" placeholder="Numer"required >
       <br><input class="input" type="text" name="street" placeholder="Ulica" required>
    <br> <input class="input" type="text" name="city" placeholder="Miasto"required >
    <br>   <input class="input" type="text" name="code" placeholder="Kod pocztowy"required>
    <br>   <button class="btnR" type="submit" name="signup-submit">Zarejestruj się!</button>
     </form></div>
   </section>
    </div>
   </main>
