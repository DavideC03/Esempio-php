<?php
include('db_connection.php');

$sql = "INSERT INTO 'rubrica'('Nome', 'Cognome', 'Numero') VALUES ('Davide','Castellani',1234567890);";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>