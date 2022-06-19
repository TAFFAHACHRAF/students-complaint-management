<?php
    session_name("etudiant");
    session_start();
    require("../../../db/connexion.php");
    if(isset($_SESSION['matricule'])){
        if(isset($_POST['send'])){
            $id=$_GET['id_rec'];
            $numero_chambre=$_POST['numero_chambre'];
            $Type_de_probleme=$_POST['Type_de_probleme'];
            $subject=$_POST['subject'];

            $sql="UPDATE reclamation set numero_chambre='{$numero_chambre}', type='{$Type_de_probleme}', subject='{$subject}'
                WHERE id_reclamation='{$id}'";
            $result=$conex->query($sql);
            header("location:index.php");
        }
    }
    else{
        header("location:../login.php");
    }
?>