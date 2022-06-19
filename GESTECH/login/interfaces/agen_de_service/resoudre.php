<?php
    session_name("agen_de_service");
    session_start();
    if(isset($_SESSION['matricule'])){
        $id_rec=$_GET['id_rec'];
        require("../../../db/connexion.php");

        $sql="UPDATE reclamation set etat_reclamation='Bien traité'
        WHERE id_reclamation='{$id_rec}'";
        
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
?>