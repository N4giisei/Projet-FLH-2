<?php include ("include/entete.inc.php"); ?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f9f7f8;
        }

        .conteneur {
            background-color: #f5f5f5;
            padding: 20px;
            margin: 20px;
        }

        .menu {
            display: flex;
            background-color: #FFCFCF; /* Rose */
            border-radius: 10px;
        }

        .photo {
            width:  65%;
            height: auto;
            border-radius: 40px;
            padding: 10px;
            padding: 30px;
        }

        .texte {
            flex: 1;
            padding: 20px;
            font-family: 'Lobster' , sans-serif;
            font-size: 25px;
            margin-top: 60px;
            text-align: center;
            color: #903C3E;
            margin-left: -10px;
        }

        .rectangles {
            display: flex;
            justify-content: space-between;
            margin-top: 50px;
            margin: 30px;
        }

        .rectangle {
            width: 48%;
            background-color: #FF9697; /* Autre couleur */
            border-radius: 10px;
            overflow: hidden;
            margin-top: 50px;
        }

        .photo-rectangle,
        .texte-rectangle {
            padding: 10px;

        }

        .photo-rectangle {
            height: auto; /* Ajustez la hauteur selon vos besoins */
            padding: 20px;
        }

        .texte-rectangle {
            font-size: 15px;
            color: #f5f5f5;
            text-align: center;
            margin-top: -20px;
            font-weight: bold;
        }

        .texte-rectangle h2 {
            text-decoration: underline;
        }

        .photo img,
        .photo-rectangle img {
            border-radius: 10px; /* Ajustez le rayon selon vos préférences */
            overflow: hidden; /* Assurez-vous que l'image est complètement contenue dans le cadre arrondi */
            width: 100%; /* Assurez-vous que l'image remplit complètement son conteneur arrondi */
            height: auto; /* Garantit une hauteur proportionnelle pour l'image */
        }

        .voir-plus {
        display: inline-block;
        margin-top: 10px; /* Ajustez la marge selon vos besoins */
        padding: 8px 16px;
        background-color: #FF7C7E; /* Couleur de fond du bouton */
        color: #f5f5f5; /* Couleur du texte du bouton */
        text-decoration: none;
        border-radius: 5px;
        font-weight: bold;
    }


    </style>
    <title>Acceuil</title>
</head>
<body>

    <div class="conteneur">
        <div class="menu">
            <div class="photo">
                <img id="piscine" src="images/piscine.png" alt="Photo présentation ">              
            </div>
            <div class="texte">
                <p>Feels Like Home est spécialisée en presations de service de qualité accessible aux Professionnels et Particuliers. <br></p>
                <li>Preparation et nettoyage de logements saisonniers (Régulier et occasionnel)</li>
                <li>Entretien de logements de particuliers</li>
                <li>Nettoyage de locaux médicaux et profeessionels</li>
                <p>Nos services s'adressent également aux voyageurs désireux de séjourner à Carcassonne. <br>
                Retrouvez tous les hébergements en partenariat avec Feels Like Home. </p>
            </div>
        </div>
        <div class="rectangles">
            <div class="rectangle">
                <!-- Rectangle 1 -->
                <div class="photo-rectangle">
                    <img id="piscine" src="images/Petit-dej.jpeg" alt="Photo hébergement">  
                </div>
                <div class="texte-rectangle">
                    <h2> Hébergement </h2>
                    <p>Voici les Airbnb que nous proposons </p>
                    <a href="Isly.php" class="voir-plus">Voir plus</a>
                </div>
            </div>
            <div class="rectangle">
                <!-- Rectangle 2 -->
                <div class="photo-rectangle">
                <img id="Lit" src="images/Services.jpeg" alt="Photo Services">
                </div>
                <div class="texte-rectangle">
                    <h2> Services </h2>
                    <p>Voici les Services que nous proposons </p>
                    <a href="Services.php" class="voir-plus">Voir plus</a>
                </div>
            </div>
        </div>
    </div>

</body>
</html>


<?php include ("include/basDePage.inc.php");
?>

