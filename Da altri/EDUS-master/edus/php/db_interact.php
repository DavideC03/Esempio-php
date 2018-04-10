<?php

  header('Content-Type: application/json');

  include('db_connection.php');

  if ($conn->connect_error) {
	    $data["error"] = "Database connection error";
	    die(json_encode($data));
	}



  if(empty($_GET["cognome"]) && empty($_GET["classe"]) && empty($_GET["materia"])){

    $sql = "SELECT cognome, nome, classe, materia, matricola FROM tutor;";
  } else{

    $controllo = false;
    $sql = "SELECT cognome, nome, classe, materia, matricola FROM tutor WHERE ";

      if (!empty($_GET["cognome"])){
        $sql .= "cognome='" . $_GET["cognome"] . "'" ;
        $controllo = true;
      }

      if (!empty($_GET["classe"])){
        if ($controllo == true){
          $sql .= "AND ";
        }
        $sql .= "classe='" . $_GET["classe"]  . "' ";
        $controllo = true;
      }

      if (!empty($_GET["materia"])){
        if ($controllo == true){
          $sql .= "AND ";
        }
        $sql .= "materia='" . $_GET["materia"] . "'" ;
        $controllo = true;
      }

      $sql .= ";";

  }

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    $data["processes"] = array();
    $cont = 0;

    while($row = $result->fetch_assoc()) {
      $data["processes"][$cont] = array();
      foreach ($row as $key => $value) {
        $data["processes"][$cont][$key] = utf8_encode($value);
      }
        $cont++;
      }
    } else {
      $msg = "0 risultati trovati!";
      die(json_encode(array("noresult"=>"<script type='text/javascript'>alert('$msg');</script>")));

    }

    $conn->close();

    die(json_encode($data));
 ?>
