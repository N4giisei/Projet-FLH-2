<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Salsa&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f9f7f8;
        }

        #header {
            background-color: #f9f7f8;
            padding: 10px 0;
            text-align: center;
            position: relative;
        }

        #logo-container {
            background-color: #fff;
            padding: 10px;
            background-color: #f9f7f8;
        }

        #logo {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 0 auto;
        }

        #navigation {
            background-color: #feb6b7;
            padding: 10px 0;
            height: 40px;    
            font-family: 'Salsa', sans-serif;
        }

        .nav-link {
            text-decoration: none;
            color: #903C3E;
            margin: 0 20px;
            position: relative;
            font-weight: bold;
            top: 10px;
            font-size: 18px; 
        }

        .nav-link:hover::after {
            content: "";
            position: absolute;
            bottom: -2px; /* Ajustez cet espace en fonction de vos besoins */
            left: 0;
            width: 100%;
            height: 2px;
            background-color: #903C3E;
            transform: scaleX(0); /* Masque initialement le soulignement */
            transform-origin:center;
            transition: transform 0.2s ease-in-out;
        }

        .nav-link:hover::after {
            transform: scaleX(1); /* Affiche le soulignement au survol */
        }
    </style>
</head>
<body>
    <div id="logo-container">
        <img id="logo" src="images/logo.jpg" alt="Logo de l'entreprise">
    </div>
    <div id="header">
        <div id="navigation">
            <a href="index.php" class="nav-link">Accueil</a>
            <a href="Hébergement.php" class="nav-link">Hébergements</a>
            <a href="reservation.php" class="nav-link">Réservation</a>
            <a href="Services.php" class="nav-link">Services</a>
            <a href="Recrutement.php" class="nav-link">Recrutement</a>
            <a href="Contact.php" class="nav-link">Contact</a>
        </div>
    </div>
</body>
</html>
