<?php include ("include/entete.inc.php"); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Salsa&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f7f8;
            margin-left: 0;
            padding: 0;
        }

        .boutonRetour {
        margin-top: 10px; /* Ajustez selon votre préférence */
        margin-left: 20px; /* Ajustez selon votre préférence */
        width: 80px; /* Définir la largeur du bouton */
        border-radius: 15px; /* Bords arrondis */
        background-color: #feb6b7; /* Couleur de fond */
        color: #903C3E; /* Couleur du texte */
        border: none; /* Pas de bordure */
        font-family: 'Salsa', sans-serif;
        display: block;
        text-decoration: none;
        padding: 10px 20px;
        text-align: center;    
    }


        h1 {
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
    <title>Contact</title>
</head>
<body>

<a href="Index.php" class="boutonRetour">Retour</a>

<h1> Contactez nous !! </h1>

<form action="envoi_email.php" method="post">
        <label for="nom">Nom </label>
        <input type="text" id="nom" name="nom" required>

        <label for="prenom">Prénom </label>
        <input type="text" id="prenom" name="prenom" required>


        <label for="email">E-mail </label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message </label>
        <textarea id="message" name="message" rows="4" required></textarea>

        <input type="submit" value="Envoyer">
    </form>
</body>
</html>


<?php include ("include/basDePage.inc.php");?>