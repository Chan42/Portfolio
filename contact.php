<?php

    if (isset($_POST["message"])) {
        $message = "Ce message vous a été adressé via votre Portfolio
        Nom : " . $_POST["nom"] ."
        Email : " . $_POST["email"] ."
        Mssage : " . $_POST["message"];
        $retour = mail("aboubakari.chanfi@gmail.com", $_POST["sujet"], $message, "Reply-to:" . $_POST["email"]);
        if ($retour) {
            echo "<p>L'email a bien été envoyé. </p>";
            }
    }
