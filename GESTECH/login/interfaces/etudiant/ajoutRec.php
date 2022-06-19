<?php
    session_name("etudiant");
    session_start();
    if(isset($_SESSION['matricule'])){
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
      <li><a style="color:black;" href="index.php">Afficher les réclamations</a></li>
      <li><a style="color:green;" href="ajoutRec.php">Ajouter une réclamation  </a></li>
      <li><a style="color:red;" href="../../login.php">Deconnexion </a></li>
    </ul>
  </nav>
  
  <article>
         <header class="page-header">
            <h1 class="page-title">ajouter une reclamation</h1>
          </header>

          <div class="container2">
            <form method="POST" action="ajoutRecForm.php">
          
              <label for="cite">cité</label>
              <select id="cite" name="cite" required>
              <option value="1">cité 1</option>
              <option value="2">cité 2</option>
              <option value="3">cité 3</option>
              <option value="4">cité 4</option>
              <option value="5">cité 5</option>
              <option value="6">cité 6</option>
              <option value="7">cité 7</option>
              <option value="8">cité 8</option>
              <option value="9">cité 9</option>
              <option value="10">cité 10</option>
              <option value="11">cité 11</option>
              <option value="12">cité 12</option>
              <option value="13">cité 13</option>
              <option value="14">cité 14</option>
              <option value="15">cité 15</option>
              <option value="16">cité 16</option>
              <option value="17">cité 17</option>
              <option value="18">cité 18</option>
              <option value="19">cité 19</option>
              <option value="20">cité 20</option>
              </select>
          
              <label for="numero_chambre">Numéro de la chambre</label>
              <input
              type="text"
              id="room"
              name="numero_chambre"
              required
              placeholder="Numéro de votre chambre."
              />
          
              <label for="Type_de_probleme">Type de problèmes</label>
              <select id="type" name="Type_de_probleme" required>
              <option value="Electricité">Electricité</option>
              <option value="Cablâge">Cablâge</option>
              <option value="Manque d'équipements">Manque d'équipements</option>
              <option value="Plomberie">Plomberie</option>
              <option value="Menuiserie">Menuiserie</option>
              </select>

          
              <label for="subject">Sujet</label>
              <textarea
              id="subject"
              name="subject"
              required
              placeholder="Décrivez votre problème.(optionnel)"
              style="height: 200px"
              ></textarea>
          
              <input type="submit" value="Submit" name="send"/>
            </form>
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
                    <p>+212 266666666<br></br>
                        <a href="mailto:#">some.email@somewhere.com</a><br></br>
                        <br>ENIM BP 735 AGDAL RABAT RABAT</br>
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

