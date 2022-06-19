<?php
    session_name("responsable_ressource");
    session_start();
    if(isset($_SESSION['matricule'])){
        if(isset($_POST['send'])){
            require("../../../db/connexion.php");
            
            $matricule=$_SESSION['matricule'];
            $date=date("Y/m/d");
            $agent=$_SESSION['matricule'];
            $message=$_POST['message'];
            $id_rec=$_GET['id_rec'];

            $sql1="INSERT INTO intervention values ('0','{$matricule}','{$agent}','{$date}','{$message}')";
            $sql2="UPDATE reclamation set etat_reclamation='Bien traiter'
                    WHERE id_reclamation='{$id_rec}'";

            $result=$conex->query($sql1);
            $result2=$conex->query($sql2);

            if($result && $result2){
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