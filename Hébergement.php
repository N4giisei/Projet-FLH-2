<?php include ("include/entete.inc.php"); ?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Salsa&display=swap" rel="stylesheet">
    <title>Hébergement</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .property-preview {
            position: relative; /* Ajout */
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            margin-left: 500px;
            border: 3px solid #FF9697; /* Ajout du contour */
            border-radius: 10px; /* Coins arrondis */
            width: 45%; /* Prend 65% de la largeur de la page */
            padding: 20px;
            box-sizing: border-box; /* Inclut les bordures dans la largeur */
        }
        .property-image {
            flex: 0 0 300px;
            margin-right: 20px;
        }
        .property-image img {
            max-width: 100%;
            height: auto;
            border-radius: 10px; /* Arrondir l'image */
        }

        .property-title {
            font-size: 30px;
            margin-bottom: 10px;
            color: #903c3e;
            margin-top: -20px;
            margin-left: 10px;
            font-family: 'Salsa', sans-serif;
        }

        .property-description {
            font-size: 18px;
            margin-bottom: 5px;
            font-family: 'Salsa', sans-serif;
            color: #903c3e;
            margin-left: 10px;
            margin-top: -5px;
        }

        .property-link {
            position: absolute; /* Ajout */
            bottom: 10px; /* Ajout */
            right: 10px; /* Ajout */
            display: block;
            background-color: #FF9697;
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            text-align: center;
            width: 150px;
            margin-top: 10px;
            font-family: 'Salsa', sans-serif;
        }
    </style>
</head>
<body>
    <div class="property-preview">
        <div class="property-image">
            <img src="galerie alibert/jacuzzi.png" alt="Photo du bien">
        </div>
        <div class="property-details">
            <h2 class="property-title">Alibert</h2>
            <p class="property-description">Villa 10 personnes avec jacuzzi et exterieur</p>
            <a href="Alibert.php" class="property-link">Voir</a>
        </div>
    </div>

    <div class="property-preview">
        <div class="property-image">
            <img src="galerie costes/canape.png" alt="Photo du bien">
        </div>
        <div class="property-details">
            <h2 class="property-title">Costes</h2>
            <p class="property-description">Appartement 6 personnes en plein centre-ville</p>
            <a href="Costes.php" class="property-link">Voir</a>
        </div>
    </div>

    <div class="property-preview">
        <div class="property-image">
            <img src="galerie courtejaire/salon.png" alt="Photo du bien">
        </div>
        <div class="property-details">
            <h2 class="property-title">Courtejaire</h2>
            <p class="property-description">Appartement 4 personnes en plein centre-ville</p>
            <a href="Courtejaire.php" class="property-link">Voir</a>
        </div>
    </div>

    <div class="property-preview">
        <div class="property-image">
            <img src="galerie green/ensemble.png" alt="Photo du bien">
        </div>
        <div class="property-details">
            <h2 class="property-title">Green</h2>
            <p class="property-description">Studio en plein centre-ville</p>
            <a href="Green.php" class="property-link">Voir</a>
        </div>
    </div>

    <div class="property-preview">
        <div class="property-image">
            <img src="galerie isly/piscine 3.png" alt="Photo du bien">
        </div>
        <div class="property-details">
            <h2 class="property-title">Isly</h2>
            <p class="property-description">Villa 6 personnes avec piscine et exterieur</p>
            <a href="Isly.php" class="property-link">Voir</a>
        </div>
    </div>

    <div class="property-preview">
        <div class="property-image">
            <img src="galerie le 9/salon.png" alt="Photo du bien">
        </div>
        <div class="property-details">
            <h2 class="property-title">Le 9</h2>
            <p class="property-description">Appartement 4 personnes en plein centre-ville</p>
            <a href="Le 9.php" class="property-link">Voir</a>
        </div>
    </div>

    <div class="property-preview">
        <div class="property-image">
            <img src="galerie marty 3/chambre 1.png" alt="Photo du bien">
        </div>
        <div class="property-details">
            <h2 class="property-title">Marty 2</h2>
            <p class="property-description">Apparement 5 personnes avec cour partagée</p>
            <a href="Marty 3.php" class="property-link">Voir</a>
        </div>
    </div>

    <div class="property-preview">
        <div class="property-image">
            <img src="galerie marty 2/chambre.png" alt="Photo du bien">
        </div>
        <div class="property-details">
            <h2 class="property-title">Marty 3</h2>
            <p class="property-description">Apparement 5 personnes avec cour partagée</p>
            <a href="Marty 2.php" class="property-link">Voir</a>
        </div>
    </div>

    <div class="property-preview">
        <div class="property-image">
            <img src="galerie palaja/piscine.png" alt="Photo du bien">
        </div>
        <div class="property-details">
            <h2 class="property-title">Palaja</h2>
            <p class="property-description">Villa 8 personnes avec piscine et exterieur</p>
            <a href="Palaja.php" class="property-link">Voir</a>
        </div>
    </div>

    <div class="property-preview">
        <div class="property-image">
            <img src="galerie trivalle/ensemble.png" alt="Photo du bien">
        </div>
        <div class="property-details">
            <h2 class="property-title">Trivalle</h2>
            <p class="property-description">Studio au pied de la cité médiévale</p>
            <a href="Trivalle.php" class="property-link">Voir</a>
        </div>
    </div>

    <div class="property-preview">
        <div class="property-image">
            <img src="galerie verdun/tele.png" alt="Photo du bien">
        </div>
        <div class="property-details">
            <h2 class="property-title">Verdun</h2>
            <p class="property-description">Appartement 4 personnes</p>
            <a href="Verdun.php" class="property-link">Voir</a>
        </div>
    </div>

</body>
</html>


<?php include ("include/basDePage.inc.php");?>