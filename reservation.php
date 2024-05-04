<?php include ("include/entete.inc.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réservation de logement</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Salsa&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h2 {
            margin-left: 790px;
            font-family: Salsa , sans-serif;
        }

        form {
            padding: 20px;
            border-radius: 8px;
            max-width: 400px;
            width: 100%;
            margin-left: 700px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-family: Salsa , sans-serif;
        }

        input[type="text"],
        input[type="email"],
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input, select, textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-family: Salsa , sans-serif;
            font-size: 15px;
        }

        input[type="submit"] {
            background-color: #FF9697;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-family: 'Alegreya', sans-serif; 
            font-size: 15px;
        }

        input[type="submit"]:hover {
            background-color: #FF7B7D;
        }
    </style>
</head>
<body>
    <h2>Réserver un logement</h2>
    <form action="reservation.php" method="post">

        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required><br><br>

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required><br><br>

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="telephone">Téléphone :</label>
        <input type="text" id="telephone" name="telephone" required><br><br>

        <label for="date_debut">Date de début :</label>
        <input type="date" id="date_debut" name="date_debut" required><br><br>

        <label for="date_fin">Date de fin :</label>
        <input type="date" id="date_fin" name="date_fin" required><br><br>

        
        </select><br><br>

        <input type="submit" value="Réserver">
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


    </form>
</body>
</html>


<?php include ("include/basDePage.inc.php");?>