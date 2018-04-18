<?php
    require("config/database.php");
    require ("includes/functions.php");
    require ("includes/constants.php");



    // Vérifie si le formulaire a ete soumis
    if (isset($_POST['register']))
    {
        // verfifie si tous les champs ont ete remplis
        if (note_empty(['name','pseudo','email','password','password_confirm']) )
        {
            $errors = [];
            extract($_POST);

            // vérifie la longeur du pseudo
            if ( mb_strlen($pseudo) < 3)
            {
                $errors[] = "Pseudo trop court ! ( Minimum 3 caractères)" ;
            }
            // vérifie l'adresse mail
            if ( ! filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                $errors[] = " Merci d'introduire une adresse email valide ! ";
            }
            if ( mb_strlen($password) < 6)
            {
                $errors[] = " Mot de passe trop court ! ( Minimum 6 caractères)" ;
            } elseif ($password != $password_confirm){
                $errors[] = "les deux mot de passe ne concordent pas !";
            }

            if(is_already_in_use('pseudo', $pseudo, 'users')){
                $errors[] = "pseudo déja utilisé!";
            }
            if(is_already_in_use('email', $email, 'users')){
                $errors[] = "email déja utilisé!";
            }

            if(count($errors)== 0)
            {
                // envoi d'un mail d'activation
                $to  = $email;
                $subject = WEBSITE_URL." - Activation de compte";
                $token = sha1($pseudo.$email.$password);

                ob_start();
                require ('templates/emails/activation.tmpl.php');
                $content = ob_get_clean();

                $headers = 'MIME-version : 1.0'."\r\n";
                $headers .='content-type : text/html; charset=iso-8859-1'. "\r\n";
                mail($to, $subject, $content, $headers);

                // informer l'utilisateur pour qu'il vérifie sa boite mail
                echo "mail d'activation envoyé";

            }


        }
        else
        {
            $errors[]= "Veuillez remplir le formulaier SVP !";
        }



    }




?>







<?php require("views/register.view.php");?>