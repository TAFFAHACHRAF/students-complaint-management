<?php
    session_name("etudiant");
    session_start();
    if(isset($_SESSION['matricule'])){
        require("../../../db/connexion.php");
        if(isset($_GET['id_rec'])){
            $id=$_GET['id_rec'];
            $sql="DELETE FROM reclamation WHERE id_reclamation='{$id}'";
            $result=$conex->query($sql);
            echo $sql;
            if($result){
                echo "<script> alert('Bien supprimer') </script>";
                header("location:index.php");
            }
            else{
                echo "<script> alert('Erreur de suppression') </script>";
                header("location:index.php");
            }
        }
        else{

        }
    }
    else{
        header("location:../../login.php");
    }
?>