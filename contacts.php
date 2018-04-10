<?php

include('db_connection.php');

  $sql = "SELECT * FROM `rubrica` ";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo $row["Nome"];
      }
  } 
$conn->close(); 

?>