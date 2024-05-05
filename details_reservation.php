<?php include ("include/entete.inc.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails de la réservation</title>
    <!-- Vos liens de style -->
</head>
<body>
    <h2>Détails de la réservation</h2>
    <?php
    // Vérifiez si les données de réservation sont disponibles dans la session
    session_start();
    if(isset($_SESSION['reservation_data'])) {
        $reservation_data = $_SESSION['reservation_data'];

        // Affichez les détails de la réservation
        echo "<p>Nom: " . $reservation_data['nom'] . "</p>";
        echo "<p>Prénom: " . $reservation_data['prenom'] . "</p>";
        echo "<p>Email: " . $reservation_data['email'] . "</p>";
        echo "<p>Téléphone: " . $reservation_data['telephone'] . "</p>";
        echo "<p>Date de début: " . $reservation_data['date_debut'] . "</p>";
        echo "<p>Date de fin: " . $reservation_data['date_fin'] . "</p>";

        // Effacez les données de la session après les avoir affichées
        unset($_SESSION['reservation_data']);
    } else {
        // Redirigez l'utilisateur vers la page de réservation s'il n'y a pas de données de réservation dans la session
        header("Location: reservation.php");
        exit();
    }
    ?>
</body>
</html>

<?php include ("include/basDePage.inc.php");?>