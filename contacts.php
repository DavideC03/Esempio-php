<?php

//Intestazione html
echo "<div id='page'><h1>Rubrica</h1>"

include('db_connection.php');

  $sql = "SELECT * FROM `rubrica` ;
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        /*if($row["note"] == ""){
          $row["note"] = "Non sono presenti note";
        }*/
        echo "<div class='persona' style='background-color:"+color+';'+"'>"+
          "<span><b>Nome 		: </b><i>" + $row[Nome] 		+ "</i></span><br/>" +
          "<span><b>Cognome : </b><i>" + $row[Cognome] 	+ "</i></span><br/>" +
          "<span><b>Numero 	: </b><i>" + $row[Numero] 	+ "</i></span><br/>" +
          "</div><br/><div class='clear'></div>";
      }
      echo "</table>";

  } else {
    //Messaggio
    $msg = "0 risultati trovati!";
    echo "<script type='text/javascript'>alert('$msg');</script>";
}

$conn->close();

//Fine 
echo "<center><button class='button' style='vertical-align:middle' onclick='form()'><span>Aggiungi contatto</span></button></center></div>"
?>