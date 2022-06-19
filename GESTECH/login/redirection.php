<?php
    if(isset($_POST['send'])){  
        require("../db/connexion.php");
        $email=$_POST['email'];
        $password=$_POST['password'];

        $sql_etudiant="SELECT * FROM etudiant WHERE email='{$email}' AND password='{$password}'";
        $res1=$conex->query($sql_etudiant);
        if($res1){
            $data1=$res1->fetch_assoc();
        }

        if($data1['matricule']){
            session_name("etudiant");
			session_start();
            $_SESSION['matricule']=$data1['matricule'];
            header("location:interfaces/etudiant/");
        }
        else{
            $sql_admin="SELECT * FROM administrateur WHERE email='{$email}' AND password='{$password}'";
            $res2=$conex->query($sql_admin);
            if($res2){
                $data2=$res2->fetch_assoc();
            }

            if($data2['matricule']){
                session_name("administrateur");
                session_start();
                $_SESSION['matricule']=$data2['matricule'];
                header("location:interfaces/administrateur/");
            }
            else{
                $sql_technicien="SELECT * FROM technicien WHERE email='{$email}' AND password='{$password}'";
                $res3=$conex->query($sql_technicien);
                if($res3){
                    $data3=$res3->fetch_assoc();
                }

                if($data3['matricule']){
                    session_name("agen_de_service");
                    session_start();
                    $_SESSION['matricule']=$data3['matricule'];
                    header("location:interfaces/agen_de_service/");
                }
                else{
                    $responsable_ressources="SELECT * FROM responsable_ressources WHERE email='{$email}' AND password='{$password}'";
                    $res4=$conex->query($responsable_ressources);
                    if($res4){
                        $data4=$res4->fetch_assoc();
                    }
                    
                    if($data4['matricule']){
                        session_name("responsable_ressource");
                        session_start();
                        $_SESSION['matricule']=$data4['matricule'];
                        header("location:interfaces/responsable_ressource");
                    }
                    else{
                        ?>
                        <script> alert('Email or password error'); </script>
                        <?php
                        header("location:login.php");
                    }
                }
            }
        }

    }
    else{
        header("location:login.php");
    }
?>