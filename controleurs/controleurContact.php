<?php 
        if(isset($_POST["message"])) {
            $message = "Ce message vous a été envoyé via la page contact du site Transport-dlexpress.fr
            Nom : " . $_POST["nom"] . "
            Email : " . $_POST["email"] . "
            Message : " . $_POST["message"];
            $retour = mail("bghielyassin@outlook.fr", $_POST["sujet"], $message,
            "From:contact.DL_Express@exemplesite.fr" . "\r\n" . "Reply-to:" . $_POST["email"]);
            if($retour) {
                $texte='<p style="">L\'email à bien été envoyé </p>';
            }
            else {
                $texte='<p style="">L\'email n\'a pas été envoyé </p>';
            }
        }
?>

