<?php
session_start();
include('db_connection.php');

$note = $_POST['notearea'];
$utente =  $_SESSION['login_user'];

$select = "SELECT id FROM disponibilita WHERE matricola_tutor = '$utente'";
$result = $conn->query($select);

if ($result->num_rows == 0){

  $insert = "INSERT INTO disponibilita(matricola_tutor, note) VALUES ('$utente', '$note')";
  $conn->query($insert);
}
else{

  $update = "UPDATE disponibilita SET note='$note' WHERE matricola_tutor= '$utente'";
  $conn->query($update);
}


$_SESSION['errore'] = 1;
header("Location: ../modificanote.php"); /* Redirect browser */
  $conn->close();
?>
