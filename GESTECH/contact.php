<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Contact us - Progressus Bootstrap template</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">
</head>

<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<a class="navbar-brand" href="index.php"> <img class="logo" src="assets/images/logo3.png" ></a>
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			<div class="nav-area">
				<ul class="nav navbar-nav pull-right">
					<li><a href="index.php"><i class="fa fa-fw fa-home"></i> Acceuil </a></li>
		
					<li><a href="about.php"><i class="fa fa-globe"></i> À propos</a></li>
					<li class="active"><a href="contact.php"><i class="fa fa-fw fa-envelope"></i> Contact</a></li>
					<div class ="login-button">
						<a href="login/login.php"><button class="btn-group"><i class="fa fa-fw fa-user"></i> Login</button></a>
					</div>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li class="active">Contact </li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-sm-9 maincontent">
				<header class="page-header">
					<h1 class="page-title">Contactez-nous</h1>
				</header>
				
				<p>
					Cher élèves ingénieurs de l'école nationale supérieure des Mines de Rabat , si vous vous êtes intéressés à notre site Web , merci de nous donner votre point de vue afin de l'améliorer plus davantage .				</p>
				<br>
					<form method="GET" action="contact.php">
						<div class="row">
							<div class="col-sm-4">
								<input class="form-control" name="nom" type="text" placeholder="Nom et Prénom" required>
							</div>
							<div class="col-sm-4">
								<input class="form-control" name="email" type="text" placeholder="Email" required>
							</div>
							
						</div>
						<br>
						<div class="row">
							<div class="col-sm-12">
								<textarea placeholder="Ton message ..." name="message" class="form-control" rows="9" required></textarea>
							</div>
						</div>
						<br>
						<div class="row">
							
							<div class="col-sm-6 text-right">
								<input class="btn btn-action" name="send" type="submit" value="send" required>
							</div>
						</div>
					</form>

			</article>
			<!-- /Article -->
			


		</div>
	</div>	<!-- /container -->
	
	

	<footer id="footer">

		<div class="footer1">
			<div class="container">
				<div class="row">
					
					<div class="col-md-3 widget">
						<h3 class="widget-title">Contact</h3>
						<div class="widget-body">
							<p>+212 266666666 <br>
								<a href="mailto:#">some.email@somewhere.com</a><br>
								<br>
								ENIM BP 735 AGDAL RABAT RABAT
							</p>	
						</div>
					</div>

					

				</div> <!-- /row of widgets -->
			</div>
		</div>

		<div class="footer2">
			<div class="container">
				<div class="row">
					
					

					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="text-right">
								Copyright &copy; GESTECH
							</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>
	</footer>	
		




	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
	
	<!-- Google Maps -->
	<script src="https://maps.googleapis.com/maps/api/js?key=&amp;sensor=false&amp;extension=.js"></script> 
	<script src="assets/js/google-map.js"></script>
	

</body>
</html>
<?php
	if(isset($_GET['send'])){
		require("db/connexion.php");
		$nom=$_GET['nom'];
		$email=$_GET['email'];
		$message=$_GET['message'];

		$sql="INSERT INTO contacts_users values('0','{$nom}','{$email}','{$message}')";
		$result=$conex->query($sql);
		if($result){
		?>
			<script> 
				alert('Très bien');
				window.location.href="index.php";
			</script>
		<?php 
		}
		else{
		?>
			<script> alert('Error'); </script>
		<?php
		}
	}
?>