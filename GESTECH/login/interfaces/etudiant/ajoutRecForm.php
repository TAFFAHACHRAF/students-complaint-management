<?php
    session_name("etudiant");
    session_start();
    if(isset($_SESSION['matricule'])){
        if(isset($_POST['send'])){
            require("../../../db/connexion.php");
            
            $matricule=$_SESSION['matricule'];
            $cite=$_POST['cite'];
            $numero_chambre=$_POST['numero_chambre'];
            $Type_de_probleme=$_POST['Type_de_probleme'];
            $subject=$_POST['subject'];

            $sql="INSERT INTO reclamation values ('0','{$matricule}','{$numero_chambre}','{$Type_de_probleme}','Non traiter','{$subject}')";
            $result=$conex->query($sql);
            if($result){
                header("location:index.php");
            }
            else{
                echo "
                    <script> alert('error') </script>
                ";
            }
        }
        else{
            header("location:index.php");
        }
    }
    else{
        header("location:../../login.php");
    }
?>