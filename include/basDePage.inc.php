<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Salsa&display=swap" rel="stylesheet">
    <style>
        /* Style pour la barre rose */

        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* 100% de la hauteur de la vue */
            margin: 0; /* Supprime la marge par défaut du body */
        }

        footer {
            background-color: #feb6b7; /* Couleur rose */
            color:#903C3E; /* Couleur du texte */
            padding: 10px; /* Espace intérieur pour le contenu */
            text-align: center; /* Centrer le texte */
            margin-top: auto;
        }
        main {
            flex: 1;
            display: flex;
            flex-direction: row;
        }


        footer a {
            color: #903C3E; /* Couleur des liens dans la barre */
            margin: 0 10px; /* Marge entre les liens */
            text-decoration: none; /* Supprimer la soulignement par défaut des liens */
            font-weight: bold;
        }

        footer p {
            font-family: 'salsa', sans-serif;
        }



    </style>
    <title>Votre Titre</title>
</head>
<body>
    <footer>
        <a href="index.php">Accueil</a>
        <a href="Le 9.php">Hébergement</a>
        <a href="Services.php">Service</a>
        <a href="Recrutement.php">Recrutement</a>
        <a href="Contact.php">Contact</a>
        <a href="#">Adresse</a>
        <p> <b> FELLS LIKE HOME </b> <br> Prestation de Service <br> MARIE Marjorie - Fondatrice <br> Mobile: +33 7 82 41 40 95 
        <br> Email: marjorie.marie81@gmail.com</p>
    </footer>
</body>
</html>
