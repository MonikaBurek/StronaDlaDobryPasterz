<!DOCTYPE HTML>
<html lang="pl">
    <head>
		<title>Wspólnota Dobry Pasterz</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="dobry, pasterz, Odnowa, Duch Święty">
		<meta name="author" content="Monika Burek">
        		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">	
		<link rel="stylesheet" href="style.css" type="text/css"/>
		<link href="https://fonts.googleapis.com/css?family=Lato:400,700|Marck+Script&amp;subset=latin-ext" rel="stylesheet"><link href="https://fonts.googleapis.com/css?family=Lato|Marck+Script" rel="stylesheet">
    </head>
    <body>
		<article class="articleFourElements">
			<header>
				<div class="jumbotron">
				  <div class="container text-center">
					<div id="imgJumbotron">
					  <img class="img-responsive img-circle" src="img/holy-spirit.png" alt="Duch Święty">
					</div>
					<div id="titleJumbotron">
						<h1>Dobry Pasterz</h1>  
						<h2>Wspólnota Odnowy w Duchu Świętym</h2>
						<h3>Parafia pw. Miłosierdzia Bożego i św. Siostry Faustyny Kowalskiej w Toruniu</h3>	
					</div>
				  </div>
				</div>
			</header>
			
			<nav class="navbar navbarProperties">
				<div class="container text-center">
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">MENU</button>
					</div>
					<div class="collapse navbar-collapse" id="myNavbar">
					  <ul class="nav navbar-nav">
						<li class="active"><a href="#">Słowo dla Wspólnoty</a></li>
						<li><a href="#">Aktualności</a></li> 
						<li><a href="#">Rekolekcje</a></li> 
						<li class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" href="#">O Wspólnocie
								<span class="caret"></span></a>
								<ul class="dropdown-menu">
								  <li><a href="#">Informacje o wspólnocie</a></li>
								  <li><a href="#">Galeria</a></li>
								</ul>
						  </li>	
						  <li class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" href="#">Rozwój duchowy
								<span class="caret"></span></a>
								<ul class="dropdown-menu">
								  <li><a href="#">Szkoła Miłosierdzia</a></li>
								  <li><a href="#">Konferencje</a></li>
								  <li><a href="#">Pieśni Pełne Ducha</a></li>
								</ul>
						  </li>	
						  <li><a href="#">Kontakt</a></li> 
					</ul>
					</div>
				  </div>
			</nav>
			
			
			<main>
				<div class="container">
					<?php
					switch($action):
						case 'showMain':
							include 'templates/home.php';
							break;
						default:
						echo 'Błąd';		
					endswitch;
					?>	
				</div>
			</main>
			
			<footer class="container-fluid">
				 <div class="row">
					<div class="col-md-2 col-md-offset-2">
						<span class="titleFooter">Lider wspólnoty</span>
						<p>Zofia Olkiewicz</br>
						<span class="glyphicon glyphicon-envelope"></span> olkiewicz.zosia@gmail.com</br>
						<span class="glyphicon glyphicon-phone-alt"></span> 881-313-503</p>    

					</div>
					<div class="col-md-2 col-md-offset-1">
						<span class="titleFooter">Egzorcysta diecezjalny</span>
						<p>ks. Józef Kiełpiński</br>
						<span class="glyphicon glyphicon-envelope"></span> Płowęż, Jabłonowo Pomorskie</br>
						<span class="glyphicon glyphicon-phone-alt"></span> 56 495 81 07</p> 
					</div>
					
					<div class="col-md-3 col-md-offset-1">
						<span class="titleFooter">Przydatne adresy</span>
						  <a href="http://www.milosierdzie.org/" class="btn btn-info btn-block" role="button">
						  Strona Naszej Parafii</a>
						  
						  <a href="http://odnowa.diecezja-torun.pl/" class="btn btn-info btn-block" role="button">
						  Strona Odnowy Diecezji Toruńskiej</a>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center">
						<div class="copyright">
							Wspólnota Dobry Pasterz &copy; 2019.  Wszystkie prawa zastrzeżone.
						</div> 
					</div>	
					<div class="col-md-2 ">
						<div class="execution">
							Realizacja: monikaburek
						</div>
					</div>
				</div>
			</footer>
			
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
			
		</article>
    </body>
</html>