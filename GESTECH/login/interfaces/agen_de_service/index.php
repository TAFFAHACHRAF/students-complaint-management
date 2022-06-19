<?php
    session_name("agen_de_service");
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
      <li><a style="color:black;" href="index.php">Afficher les intervention</a></li>
      <li><a style="color:red;" href="../../login.php">Deconnexion </a></li>
    </ul>
  </nav>
  
  <article>
    <h2>es intervention qui conserne les réclamations</h2>
        <div class="table-wrapper">
            <table class="fl-table">
                <thead>
                    <tr>
                        <th>Date intervention</th>
                        <th>Type de probleme</th>
                        <th>Etat de reclamation</th>
                        <th>Sujet de reclamation</th>
                        <th>Date intervention</th>
                        <th>Message</th>
                        <th>Résolution</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql="SELECT * FROM intervention,technicien,reclamation
                            WHERE intervention.matricule_technicien=technicien.matricule";
                        echo $sql;

                        $result=$conex->query($sql);
                        if($result){
                            while($data=$result->fetch_assoc()){
                                $id=$data['id_reclamation'];
                            ?>
                            <tr>
                                <td><?= $data['numero_chambre'] ?></td>
                                <td><?= $data['type'] ?></td>
                                <td><?= $data['etat_reclamation'] ?></td>
                                <td><?= $data['subject'] ?></td>
                                <td><?= $data['date_intervention'] ?></td>
                                <td><?= $data['message'] ?></td>
                                <td><a href="resoudre.php?id_rec=<?= $id ?>"><button type="button"  class="btn btn-success">Résoudre</button></a></td>
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

