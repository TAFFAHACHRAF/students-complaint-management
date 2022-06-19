<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Login</title>

	<link rel="shortcut icon" href="../assets/images/gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="../assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="../assets/css/main.css">

</head>

<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<a class="navbar-brand" href="../index.html"> <img class="logo" src="../assets/images/logo3.png" ></a>
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			<div class="nav-area">
				<ul class="nav navbar-nav pull-right">
					<li><a href="../index.php"><i class="fa fa-fw fa-home"></i> Acceuil </a></li>
		
					<li><a href="../index.php"><i class="fa fa-globe"></i> À propos</a></li>
					<li><a href="../contact.php"><i class="fa fa-fw fa-envelope"></i> Contact</a></li>
					<div class ="login-button">
						<a href="login.php"><button class="btn-group"><i class="fa fa-fw fa-user"></i> Login</button></a>
					</div>
					</li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="../index.php">Home</a></li>
			<li class="active">Espace de connexion </li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Login</h1>
				</header>
				
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="thin text-center">Se connecter à votre compte</h3>
							<p class="text-center text-muted">  Se connecter en utilisant CIN </p>
							<hr>
							
							<form method="POST" action="redirection.php">
								<div class="top-margin">
									<label>CIN </label>
									<input type="text" name="email" name="email" class="form-control" required>
								</div>
								<div class="top-margin">
									<label>Mot de passe <span class="text-danger">*</span></label>
									<input type="password" name="password" class="form-control" required>
								</div>

								<hr>

								<div class="row">
									<!-- <div class="col-lg-8">
										<b><a href="">Mot de passe oublié?</a></b>
									</div> -->
									<div class="col-lg-4 text-right">
										<button class="btn btn-action" name="send" type="submit">Login</button>
									</div>
								</div>
							</form>
						</div>
					</div>

				</div>
				
			</article>
			<!-- /Article -->

		</div>
	</div>	<!-- /container -->
	

	<footer id="footer" class="top-space">

		<div class="footer1">
			<div class="container">
				<div class="row">
					
					<div class="col-md-3 widget">
						<h3 class="widget-title">Contact</h3>
						<div class="widget-body">
							<p>+212 266666666<br>
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
								Copyright ©GESTECH
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
	<script src="../assets/js/headroom.min.js"></script>
	<script src="../assets/js/jQuery.headroom.min.js"></script>
	<script src="../assets/js/template.js"></script>
</body>
</html>