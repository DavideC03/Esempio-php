<?php

  session_start();

  if(!isset($_SESSION['login_user'])){
    session_destroy();
    header("Location: index.php");
  }
  else{
    if($_SESSION['login_user'] == "0")  {
      session_destroy();
      header("Location: index.php");
    }
  }

?>
