<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $destinataire = "fells.like.home04@gmail.com"; // Adresse e-mail où vous souhaitez recevoir les messages
    $sujet = "Nouveau message depuis le formulaire de contact";
    $message = $_POST['message'];
    $expediteur = $_POST['email'];

    // En-têtes pour l'e-mail
    $headers = "De: $expediteur\r\n";
    $headers .= "Reply-To: $expediteur\r\n";
    $headers .= "Content-type: text/html\r\n";

    // Envoi de l'e-mail
    if (mail($destinataire, $sujet, $message, $headers)) {
        echo "Votre message a été envoyé avec succès.";
    } else {
        echo "Une erreur s'est produite lors de l'envoi du message.";
    }
}
?>