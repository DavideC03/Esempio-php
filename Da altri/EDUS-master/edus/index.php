<!DOCTYPE html>
<html lang="it" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, maximum-scale=1, user-scalable=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Benvenuto in EDUS!</title>
      <link rel="stylesheet" href="css/style.css">
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-show-password/1.0.3/bootstrap-show-password.min.js"></script>


	  <link href="css/mdb.min.css" rel="stylesheet">
</head>

<body id="login-edus" style="background-image: url(img/desk.jpg); background-size: cover; background-repeat: no-repeat;">

  <?php

    session_start();

    if(isset($_SESSION['errore'])){
        echo "<script src='js/login_error.js'></script>";
    }
    session_destroy();
    $_SESSION['login_user'] = "0";

   ?>

  <div class="container">
    <!-- Gestione errori con alert -->
    <div class="container">
    <div class="row">
    <div class="com-md-12">
    <div class="notification login-alert">
      Inserire Nome Utente e Password!
    </div>
    <div class="notification notification-success ">
      Nome Utente o Password Errati!
    </div>
    </div>
    </div>
    </div>
    <!-- Fine Gestione errori con alert -->
      	<div class="row">
  			<div class="col-md-6 col-md-offset-3">

  				<div class="panel panel-login">
				<br>
				<div align="center"><img src="img\edus-studenti-login.png" align="center" class="img-fluid"></div>
				<br>
  					<div class="panel-heading">
  						<div class="row">
  							<div class="col-xs-6">
  								<a href="#" class="active" id="login-user-form-link"><i class="fa fa-user" aria-hidden="true"></i> Studente</a>
  							</div>
  							<div class="col-xs-6">
  								<a href="#" id="login-tutor-form-link"><span class="glyphicon glyphicon-user"></span> Tutor</a>
  							</div>
  						</div>
  						<hr>
  					</div>
  					<div class="panel-body">
  						<div class="row">
  							<div class="col-lg-12">
  								<form id="login-user-form" action="php/user_login.php" method="post" role="form" style="display: block;">
  									<div class="form-group">
  										<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
  									</div>
  									<div class="form-group">
  										<input type="password" name="password" id="password" tabindex="2" class="form-control" data-toggle="password" placeholder="Password">
  									</div>
  									<div class="form-group text-center">
  										<input type="checkbox" tabindex="0" class="" name="remember" id="remember_me" value="remeber-me">
  										<label for="remember">Ricorda l'accesso</label>
                      <p><a href="#info" data-toggle="tooltip" data-placement="center" title="Per autenticarsi come studente occorre loggarsi con le credenziali fornite dalla scuola (quelle che usualmente si ulilizzano per fare il login sui computer della scuola)">Informations</a>
  									</div>
                    <div class="form-group">
  										<div class="row">
  											<div class="col-sm-6 col-sm-offset-3">
  												<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="btn btn-success btn-login-submit" style="width: 100%" value="Login"/>
  											</div>
  										</div>
  									</div>
  								</form>
  								<form id="login-tutor-form" action="php/tutor_login_db.php" method="post" role="form" style="display: none;">
  									<div class="form-group">
  										<input type="text" name="tutor-username" id="tutor-username" tabindex="1" class="form-control" placeholder="Username" value="">
  									</div>
  									<div class="form-group">
  										<input type="password" name="tutor-password" id="tutor-password" tabindex="2" class="form-control" data-toggle="password" placeholder="Password">
  									</div>
									<div class="form-group text-center">
  										<input type="checkbox" tabindex="3" class="" name="tutor-remember" id="remember_me" value="remeber-me">
  										<label for="remember"> Ricorda l'accesso</label>
                      <p><a href="#info" data-toggle="tooltip" data-placement="center" title="Per autenticarsi come tutor occorre loggarsi con le credenziali fornite dalla segreteria quando ci si è accreditati (NON quelle che si ulilizzano per fare il login sui computer della scuola)">Informations</a>
  									</div>
                    <div class="form-group">
  										<div class="row">
  											<div class="col-sm-6 col-sm-offset-3">
  												<input type="submit" name="tutor-login-submit" id="login-submit" tabindex="4" class="btn btn-success btn-login-submit" style="width: 100%" value="Login"/>
  											</div>
  										</div>
  									</div>
  								</form>
  							</div>
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>

    <script src="js/login.js"></script>

</body>
</html>
