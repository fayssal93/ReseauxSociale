<?php

    if(isset($_POST['envoyer'])){

        if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['message'])){

            echo $_POST['nom']." ".$_POST['prenom']." ".$_POST['message'];
        }
    }

require ('views/index.views.php');
    
?>

