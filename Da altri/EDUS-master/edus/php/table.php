<?php
include('db_connection.php');

  $sql = "SELECT id, cognome, nome, classe, materia, note, matricola FROM tutor LEFT JOIN disponibilita ON tutor.matricola = disponibilita.matricola_tutor";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        if($row["note"] == ""){
          $row["note"] = "Non sono presenti note";
        }
        echo "<tr class='odd'><td class=''>" . $row["cognome"] . "</td><td class='center'>" . $row["nome"] . "</td><td class='center'> " . $row["classe"] . "</td><td class='center'><span class='center'>"
           . $row["materia"] . "</span></td>
           <td id='tdactions'>
           <button id='disponibilita' type='button' class='btn btn-primary' data-toggle='modal' data-target='#modal-id".$row['id']."'>Note</button>
           <div class='modal fade' id='modal-id".$row['id']."' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
             <div class='modal-dialog' role='document'>
               <div class='modal-content'>
                 <div class='modal-header'>
                   <h5 class='modal-title' id=''modallabel-id".$row['id']."''>Disponibilità</h5>
                   <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                     <span aria-hidden='true'>&times;</span>
                   </button>
                   </div>
                   <div class='modal-body'>".  $row["note"] . "</div>
                 </div>
                 </div>
             </div>
           </div>
           <a class='btn btn-mini btn-success' href='http://apps.marconivr.it/timap/user/". $row["matricola"]. "'>
           <i class='icon-zoom-in icon-white'></i>skill</a></td></tr>";
      }
      echo "</table>";

  } else {
    $msg = "0 risultati trovati!";
    echo "<script type='text/javascript'>alert('$msg');</script>";
}

$conn->close();


?>
