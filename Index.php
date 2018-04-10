<!DOCTYPE html>
	<html>
		<head>
			<meta 	charset='UTF-8'>																						<!--Settaggi di base-->
			<meta	http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
			<link	rel='stylesheet' type='text/css' media='all' href='style.css' />										<!--Css-->
			<link	rel='shortcut icon'		href=	'Ico.ico'>
			<meta	name='description'		content='Rubrica'>
			<meta	name='keywords'			content='Rubrica'>
			<meta	name='author'			content='Davide Castellani'>
			<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js'></script>	<!--Uso libreria jquery-->
			<title> Rubrica by DC</title>
			<script type='text/javascript' src='js.js'></script>
		</head>
		<body>
			<div id='page'>
				<h1>Rubrica</h1>																						<!--Titolo-->
				<div id='Rubrica'></div>
				<?php
					include('contacts.php')
				?>																				<!--Dove iserire i dati-->
				<center>
					<button class='button' style='vertical-align:middle' onclick='form_add()'>
							<span>
								Aggiungi contatto
							</span>
					</button>
				</center>
			</div>
		</body>
	</html>