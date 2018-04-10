<?php

include('db_connection.php');

  $sql = "SELECT * FROM `rubrica` ";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $Nome     = $row["Nome"];
      $Cognome  = $row["Cognome"];
      $Numero   = $row["Numero"];
      echo "<div class='persona' style='background-color:yellow'>".
      "<span><b>Nome 		: </b><i>" . $Nome 		. "</i></span><br/>" .
      "<span><b>Cognome : </b><i>" . $Cognome 	. "</i></span><br/>" .
      "<span><b>Numero 	: </b><i>" . $Numero 	. "</i></span><br/>" .
      "</div><br/><div class='clear'></div>";
    }
  } 
$conn->close(); 

?>