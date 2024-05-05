<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Inclure les fichiers PHPMailer
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $destinataire = "fells.like.home04@gmail.com"; // Adresse e-mail où vous souhaitez recevoir les messages
    $sujet = "Nouveau message depuis le formulaire de contact";
    $message = $_POST['message'];
    $expediteur = $_POST['email'];

    // Créer une nouvelle instance de PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Configuration du serveur SMTP de Gmail
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'fells.like.home04@gmail.com'; // Votre adresse Gmail
        $mail->Password = 'FeelsLikeHome1981.'; // Votre mot de passe Gmail
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Définir l'expéditeur et le destinataire
        $mail->setFrom($expediteur);
        $mail->addAddress($destinataire);

        // Contenu du message
        $mail->isHTML(true);
        $mail->Subject = $sujet;
        $mail->Body = $message;

        // Envoyer l'e-mail
        $mail->send();
        echo "Votre message a été envoyé avec succès.";
    } catch (Exception $e) {
        echo "Une erreur s'est produite lors de l'envoi du message : {$mail->ErrorInfo}";
    }
}
?>
