<?php
    session_name("administrateur");
    session_start();
    if(isset($_SESSION['matricule'])){
        require("../../../db/connexion.php");
        $matricule=$_SESSION['matricule'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes réclamations</title>

    <!-- Link our CSS file -->
    <link rel="shortcut icon" href="../../../assets/images/gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="../../../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../../assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="../../../assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="../../../assets/css/main.css">

    <link rel="stylesheet" href="../../../assets/css/style2.css">
    <link rel="stylesheet" href="../../../assets/css/style3.css">

</head>

<body>

<section>
  <nav>
    <ul>
      <li><a style="color:black;" href="index.php">Afficher les messgas</a></li>
      <li><a style="color:red;" href="../../login.php">Deconnexion </a></li>
    </ul>
  </nav>
  
  <article>
    <h2>Aficher les messages des utilisateurs du site (Etudiants,Professeurs,Parents...)</h2>
        <div class="table-wrapper">
            <table class="fl-table">
                <thead>
                    <tr>
                        <th>ID contact</th>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Message</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql="SELECT * FROM contacts_users";

                        $result=$conex->query($sql);
                        if($result){
                            while($data=$result->fetch_assoc()){
                            ?>
                            <tr>
                                <td><?= $data['id_contact'] ?></td>
                                <td><?= $data['nom'] ?></td>
                                <td><?= $data['email'] ?></td>
                                <td><?= $data['message'] ?></td>
                            </tr>
                            <?php
                            }
                        }
                        else{
                            echo "error";
                        }
                    ?>
                <tbody>
            </table>
        </div>
  </article>
</section>

    <footer id="footer" class="top-space">

		<div class="footer1">
			<div class="container">
				<div class="row">
					
					<div class="col-md-3 widget">
						<h3 class="widget-title">Contact</h3>
						<div class="widget-body">
							<p>+212 266666666<br>
								<a href="mailto:#">some.email@somewhere.com</a><br>
								<br>ENIM BP 735 AGDAL RABAT RABAT
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

</body>
</html>

<?php
    }
    else{
        header("location:../../login.php");
    }
?>

