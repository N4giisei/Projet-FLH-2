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
        <input type="text" id="nom" name="nom" required value="<?php if(isset($_POST['nom'])) echo $_POST['nom']; ?>"><br><br>

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required value="<?php if(isset($_POST['prenom'])) echo $_POST['prenom']; ?>"><br><br>

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>"><br><br>

        <label for="telephone">Téléphone :</label>
        <input type="text" id="telephone" name="telephone" required value="<?php if(isset($_POST['telephone'])) echo $_POST['telephone']; ?>"><br><br>

        <label for="logement">Choisir un logement :</label>
        <select id="logement" name="logement">
            <?php
            // Connexion à la base de données
            $connexion = mysqli_connect("localhost", "root", "", "reservation");

            // Vérification de la connexion
            if (!$connexion) {
                die("Échec de la connexion à la base de données : " . mysqli_connect_error());
            }

            // Récupérer la liste des logements depuis la base de données
            $query_logements = "SELECT nom FROM logements";
            $result_logements = mysqli_query($connexion, $query_logements);

            // Afficher les options du menu déroulant pour chaque logement
            while ($row = mysqli_fetch_assoc($result_logements)) {
                $logement_nom = $row['nom'];
                echo "<option value='$logement_nom'>$logement_nom</option>";
            }

            // Fermeture de la connexion
            mysqli_close($connexion);
            ?>
        </select>

        <label for="date_debut">Date de début :</label>
        <input type="date" id="date_debut" name="date_debut" required><br><br>

        <label for="date_fin">Date de fin :</label>
        <input type="date" id="date_fin" name="date_fin" required><br><br>

        <input type="submit" value="Réserver">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupération des données du formulaire
        $logement = $_POST['logement'];
        $date_debut = $_POST['date_debut'];
        $date_fin = $_POST['date_fin'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $telephone = $_POST['telephone'];

        // Connexion à la base de données
        $connexion = mysqli_connect("localhost", "root", "", "reservation");

        // Vérification de la connexion
        if (!$connexion) {
            die("Échec de la connexion à la base de données : " . mysqli_connect_error());
        }

        // Récupérer l'ID du logement à partir de son nom
        $query_logement_id = "SELECT id FROM logements WHERE nom = ?";
        $stmt_logement_id = mysqli_prepare($connexion, $query_logement_id);
        mysqli_stmt_bind_param($stmt_logement_id, "s", $logement);
        mysqli_stmt_execute($stmt_logement_id);
        mysqli_stmt_bind_result($stmt_logement_id, $logement_id);
        mysqli_stmt_fetch($stmt_logement_id);
        mysqli_stmt_close($stmt_logement_id); // Fermer le résultat de la première requête

        // Vérification de la disponibilité du logement pour la période sélectionnée
        $query_disponibilite = "SELECT id FROM logements WHERE nom = ? AND id NOT IN (
            SELECT logement_id FROM reservations WHERE ('$date_debut' BETWEEN date_debut AND date_fin)
            OR ('$date_fin' BETWEEN date_debut AND date_fin)
            OR (date_debut BETWEEN '$date_debut' AND '$date_fin')
            OR (date_fin BETWEEN '$date_debut' AND '$date_fin')
        )";
        $stmt = mysqli_prepare($connexion, $query_disponibilite);
        mysqli_stmt_bind_param($stmt, "s", $logement);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $logement_disponible = mysqli_stmt_num_rows($stmt) > 0;
        mysqli_stmt_close($stmt);

        // Afficher un message d'erreur si le logement n'est pas disponible pour la période sélectionnée
        if (!$logement_disponible) {
            echo "<p style='color: red;'>Désolé, le logement sélectionné n'est pas disponible pour la période choisie.</p>";
        } else {
            // Insertion de la réservation dans la base de données
            // Insertion des données de réservation dans la table des réservations
            $query_insert_reservation = "INSERT INTO reservations (logement_id, nom, prenom, email, telephone, date_debut, date_fin) VALUES (?, ?, ?, ?, ?, ?, ?)";
            $stmt_insert_reservation = mysqli_prepare($connexion, $query_insert_reservation);
            mysqli_stmt_bind_param($stmt_insert_reservation, "issssss", $logement_id, $nom, $prenom, $email, $telephone, $date_debut, $date_fin);

            // Exécution de la requête d'insertion
            if (mysqli_stmt_execute($stmt_insert_reservation)) {
                mysqli_close($connexion);
                // Redirection vers la page de confirmation avec l'ID de la réservation
                $reservation_id = mysqli_insert_id($connexion);
                header("Location: details_reservation.php?id=$reservation_id");
        exit();
    } else {
                // Affichage d'un message d'erreur en cas d'échec de l'insertion
                echo "<p style='color: red;'>Erreur lors de la réservation : " . mysqli_error($connexion) . "</p>";
            }

            // Fermeture des requêtes préparées
            mysqli_stmt_close($stmt_insert_reservation);
        }

        // Fermeture de la connexion
        mysqli_close($connexion);
    }
    ?>
</body>
</html>

<?php include ("include/basDePage.inc.php"); ?>
