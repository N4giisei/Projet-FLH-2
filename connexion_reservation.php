<?php
// Connexion à la base de données
$connexion = mysqli_connect("localhost", "root", "", "reservation");

// Vérification de la connexion
if (!$connexion) {
    die("Échec de la connexion à la base de données : " . mysqli_connect_error());
}

// Récupération des données du formulaire
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$date_debut = $_POST['date_debut'];
$date_fin = $_POST['date_fin'];

// Vérification de la disponibilité de la période sélectionnée
$query = "SELECT id FROM logements WHERE id NOT IN (SELECT logement_id FROM reservations WHERE ('$date_debut' BETWEEN date_debut AND date_fin) OR ('$date_fin' BETWEEN date_debut AND date_fin) OR (date_debut BETWEEN '$date_debut' AND '$date_fin') OR (date_fin BETWEEN '$date_debut' AND '$date_fin'))";
$result = mysqli_query($connexion, $query);

if (mysqli_num_rows($result) > 0) {
    // Logement disponible, effectuer la réservation
    $row = mysqli_fetch_assoc($result);
    $logement_id = $row['id'];
    $reservation_query = "INSERT INTO reservations (logement_id, nom, prenom, email, telephone, date_debut, date_fin) VALUES ('$logement_id', '$nom', '$prenom', '$email', '$telephone', '$date_debut', '$date_fin')";
    if (mysqli_query($connexion, $reservation_query)) {
        $message = "Réservation effectuée avec succès!";
    } else {
        $message = "Erreur lors de la réservation : " . mysqli_error($connexion);
    }
} else {
    // Aucun logement disponible pour la période sélectionnée
    $message = "Désolé, aucun logement n'est disponible pour la période sélectionnée.";
}

// Fermeture de la connexion
mysqli_close($connexion);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultat de la réservation</title>
</head>
<body>
    <h2>Résultat de la réservation</h2>
    <p><?php echo $message; ?></p>
</body>
</html>