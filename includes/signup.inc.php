<?php
if (isset($_POST['signup-submit'])) { //sprawdzam czy uzytkownik dostal sie poprzez klikniecie buttona

  require 'dbh.inc.php';

  $username= $_POST['uid'];
  $email= $_POST['mail'];
  $password= $_POST['pwd'];
  $passwordRepeat= $_POST['pwd-repeat'];
  $address= $_POST['adr'];
  $street= $_POST['street'];
  $city= $_POST['city'];
  $code= $_POST['code'];

  if (!($password==$passwordRepeat)) {
    header("Location: ../signup.php?error=passwordcheck");
    exit();
  }
  else{

    $sql="SELECT uidUsers FROM users WHERE uidUsers=? OR emailUsers=? ";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
      header("Location: ../signup.php?error=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "ss", $username, $email);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      $resultCheck= mysqli_stmt_num_rows($stmt);
      if ($resultCheck>0) {
        header("Location: ../signup.php?error=useroremailtaken");
        exit();
      }
      else {
          $sql="INSERT INTO users (uidUsers,emailUsers,pwdUsers,adrUsers,streetUsers,cityUsers,codeUsers) VALUES (?,?,?,?,?,?,?)";
          $stmt =mysqli_stmt_init($conn);
          if (!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../signup.php?error=sqlerror");
            exit();
      }
      else {
        $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt, "sssssss", $username, $email, $hashedPwd, $address, $street, $city, $code);
        mysqli_stmt_execute($stmt);

        header("Location: ../succeesreg.php");
        exit();
      }
    }


    }


    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);







}
else {
  header("Location: ../signup.php");
  exit();
}
