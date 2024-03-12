<?php include ("include/entete.inc.php"); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya&display=swap" rel="stylesheet">
    <style>
body {
    display: flex;
    justify-content: center;
}

    .rectangles {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
            margin: 10px;
        }

    .rectangle {
            width: 32%; /* Ajuster la largeur en fonction de vos besoins */
            background-color: #FFCFCF;
            border-radius: 10px;
            overflow: hidden;
            margin-right: 15px; /* Ajout d'espace entre les rectangles */
            text-align: center;
            margin-top: 30px;
        }
.text {
    font-size: 25px;
    margin-bottom: 10px;
    text-align: center;
    font-family: 'Lobster' , sans-serif; 
    color: #903C3E;
}

.button {
    padding: 10px;
    background-color: #FF9697; 
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-weight: bold; 
    margin: 5px;
    margin-bottom: 15px;
    font-family: 'Alegreya', sans-serif; 
    font-size: 18px;
}
    </style>
    <title>Services</title>
</head>
<body>
    <div class= "rectangles">
        <div class="rectangle">
            <div class="text"> <h2> Pack Serenity </h2> 
            <p> Préparation et nettoyage de logement saisonnier + <br> Blanchisserie <br> <br> </p></div>
            <a href="devis airbnb.php"> 
                <button class="button">Devis</button>
            </a>
        </div>

        <div class="rectangle">
            <div class="text"><h2> Pack Harmony </h2> 
            <p> Nettoyage et entretien auprès de <br> particulier <br> <br> </div>
            <a href="devis particulier.php"> 
                <button class="button">Devis</button>
            </a>
        </div>

        <div class="rectangle">
            <div class="text"><h2> Pack Natural </h2> 
            <p> Stérilisation des surfaces et équipements <br> Entretien des sols et vitrages <br> Nettoyage et désinfection des sanitaires </div>
            <a href="devis pro.php">
                <button class="button">Devis</button>
            </a>
        </div>
    </div>

</body>
</html>



<?php include ("include/basDePage.inc.php");?>
