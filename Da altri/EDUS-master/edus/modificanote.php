<html>
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, maximum-scale=1, user-scalable=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> TUTOR EDUS Sportelli tra pari</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
</head>
<body>
  <?php
  session_start();

  if(isset($_SESSION['errore'])){
      echo "<script src='js/login_success.js'></script>";
  }
  ?>

  <!-- navbar -->
  <div class="navbar navbar-dark blue">
    <div class="container d-flex justify-content-between">
      <p class="navbar-brand"><strong>TUTOR EDUS</strong></p>
      <div class="dropdown">
        <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php
          echo($_SESSION['login_user']);
          ?>
        </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="edus_tutor.php">Tabella</a>
        <a class="dropdown-item" href="index.php">Logout</a>
      </div>
    </div>
    </div>
  </div>

  <!-- Fine navbar -->

<?php
include('php/db_connection.php');
$sql = "SELECT note FROM disponibilita WHERE matricola_tutor = '17139'";
$prova = "cisco";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){

      $nota = $row['note'];
    }
  }


 ?>
  <section class="jumbotron text-center" id="sectionnote">
    <div class="container" >
      <br>
      <br>
    </div>
    <!-- Gestione errori con alert -->
    <div class="container">
    <div class="row">
    <div class="com-md-12">
    <div class="notification notification-success ">
      Salvataggio Effettuato!
    </div>
    </div>
    </div>
    </div>
      <div class="gradient1">
        <h2 style="font-family: Georgia, 'Times New Roman', Times, serif;">Note che verranno visualizzate dagli studenti:</h2>
      <br>
      <form class="" method="post" action="php/insert_note.php" >
        <div class="form-group">
        <textarea class="form-control" id="notearea" rows="2" name="notearea"><?php echo ($nota); ?></textarea>
        </div>
        <div class='product-options'>
          <input type="submit" class='btn btn-secondary' value="Save" id="submitnote"></input>
        </div>
      </form>
  </section>

  <!--Footer-->
  <footer class="page-footer blue center-on-small-only">
      <!--Footer Links-->
      <div class="container-fluid">
          <div class="row">

              <div class="col-md-4">
                <strong>ITIS G. Marconi Verona</strong>
                <hr>
                <address>
                    P.le R. Guardini 1<br>
                    Verona, IT 37138<br>
                  <abbr title="Telefono">Tel:</abbr> +39 045 8101428<br>
                  <abbr title="Fax">Fax:</abbr> +39 045 573497<br>
                  <abbr title="Website">Site:</abbr> <a href="http://www.marconiverona.gov.it/" target="blank">marconiverona.gov.it</a>
                </address>
              </div>

              <div class="col-md-4">
                <strong>Altri progetti</strong>
                <hr>
                <address>
                  <strong>Campus</strong> <a href="http://campus.marconivr.it" target="blank">campus.marconivr.it</a><br>
                  <strong>Portale</strong> <a href="http://portal.marconivr.it/" target="blank">portal.marconivr.it</a><br>
                  <strong>OpenData</strong> <a href="http://opendata.marconivr.it/" target="blank">opendata.marconivr.it</a><br>
                  <strong>Poldo</strong> <a href="http://marconi.hofa.me" target="blank">marconi.hofa.me</a><br>
                  <strong>Biblioteca 2.0</strong> <a href="http://www.anobii.com/marconivr/books" target="blank">http://www.anobii.com/marconivr/books</a><br>
                </address>
              </div>

              <div class="col-md-4">
                <strong>Sportelli Tra Pari website</strong>
                <hr>
                <img src="img/logo_footer.png" class="img-fluid">
              </div>
          </div>
      </div>
      <!--/.Footer Links-->
      <!--Copyright-->
      <div class="footer-copyright">
          <div class="container-fluid">
              © 2018 Team Edus
          </div>
      </div>
      <!--/.Copyright-->
  </footer>
  <!--/.Footer-->


  <!-- JQuery -->
      <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
      <!-- Bootstrap tooltips -->
      <script type="text/javascript" src="js/popper.min.js"></script>
      <!-- Bootstrap core JavaScript -->
      <script type="text/javascript" src="js/bootstrap.min.js"></script>
      <!-- MDB core JavaScript -->
      <script type="text/javascript" src="js/mdb.min.js"></script>

</body>
</html>
