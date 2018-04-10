<?php

  session_start();
  //error_reporting(0);

//  header('Content-Type: application/json');
  include('db_connection.php');

  $username =  $_POST["tutor-username"];       // prendo le credenziali dal form
  $password = $_POST["tutor-password"];
  $domain = 'edu.marconi';
  $ldapconfig['host'] = 'edu-rodc';
  $ldapconfig['port'] = 389;            // Porta fissa per l'LDAP
  $ldapconfig['basedn'] = 'dc=edu,dc=marconi';

  // Controllo nel caso uso un account locale
  if($username == "admin" and $password == "admin"){
    $_SESSION['login_user'] = $username;
    if(isset($_SESSION['login_user'])){
      header("Location: ../edus_tutor.php");
    }
  }

  $ds=ldap_connect($ldapconfig['host'], $ldapconfig['port']);
  ldap_set_option($ds, LDAP_OPT_PROTOCOL_VERSION, 3);
  ldap_set_option($ds, LDAP_OPT_REFERRALS, 0);

  $dn=$ldapconfig['basedn'];
  try {
    if($username != "" and $password != ""){          // Se si lasciano blank i campi logga come anonimo
      $bind=ldap_bind($ds, $username .'@' .$domain, $password);
    }
  }
  catch (Exception $e) {
    echo "errore";
  }
    //$isITuser = ldap_search($bind,$dn,'(&(objectClass=*)(sAMAccountName=' . $username.'))'); // Ricerca delle proprietà !>
    if ($bind) {

      $sql = "SELECT username, password FROM credenziali;";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          if($username == $row[username] AND sha1($password) == $row[password]){
            $_SESSION['login_user'] = $username;
            header("Location: ../edus_tutor.php");
          }
        }
      }
  }

  if(isset($_SESSION['login_user'])){

    header("Location: ../edus_tutor.php");
  }
   else {

     $_SESSION['errore'] = 1;
      header("Location: ../index.php"); /* Redirect browser */
    }


  // if(isset($_POST["tutor-username"]) && isset($_POST["tutor-password"])){
  //
  //   if($_POST["tutor-username"] == "17139" && $_POST["tutor-password"] == "ciao"){
  //
  //     $_SESSION['login_user'] = "17139";
  //
  //   }
  // }

  $conn->close();

 ?>
