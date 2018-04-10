<?php
  session_start();
  error_reporting(0);

  // Controllo nel caso uso un account locale
  if($username == "admin" and $password == "admin"){
    $_SESSION['login_user'] = $username;
    if(isset($_SESSION['login_user'])){
      header("Location: ../edus.php");
    }
  }

  if(isset($_POST["tutor-username"]) && isset($_POST["tutor-password"])){

    if($_POST["tutor-username"] == "17139" && $_POST["tutor-password"] == "ciao"){

      $_SESSION['login_user'] = "17139";

    }
  }

  if(isset($_SESSION['login_user'])){

    header("Location: ../edus_tutor.php");
  }


 ?>
