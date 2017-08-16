<?php
class phpclass {

    function sendEmail(){
        $email = $_POST['emailadresse'];
        $info = "Neue Nachricht von der Homepage:\n\n";
        $emailtext = $info.$_POST['emailtext'];
        $empfanger = "info@imkerei-heimbuerger.de";
        $betreff = $_POST['betreffarea'];

        if (mail($empfanger, $betreff, $emailtext, "From: $email") == true) {
            echo "<script>alert('E-Mail erfolgreich versendet')</script>";
        } else {
            echo "<script>alert('E-Mail konnte nicht gesendet werden')</script>";
        }
    }
}