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

        input[type="checkbox"], input[type="radio"] {
            display: none;
        }

        input[type="checkbox"] + label,
        input[type="radio"] + label {
            position: relative;
            padding-left: 30px;
            cursor: pointer;
            display: inline-block;
            line-height: 30px;
        }

        input[type="checkbox"] + label:before,
        input[type="radio"] + label:before {
            content: '';
            position: absolute;
            left: 5px;
            top: 5px;
            width: 15px;
            height: 15px;
            border: 2px solid #FF9697;
            border-radius: 50%;
            background-color: #f9f7f8;
        }

        input[type="checkbox"]:checked + label:before,
        input[type="radio"]:checked + label:before {
            background-color: #FF9697;
            border-color: #FF9697;
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
        button {
            background-color: #FF9697;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-left: 155px;
            font-family: 'Alegreya', sans-serif; 
            font-size: 15px;
        }


        button:hover {
            background-color: #FF7B7D;
        }
    </style>
    <title>Devis personnalisé</title>
</head>
<body>

<a href="Services.php" class="boutonRetour">Retour</a>


<h1> Devis personnalisé </h1>

    <form action="envoi_email.php" method="post">
        <label for="nom">Nom </label>
        <input type="text" id="nom" name="nom" required>

        <label for="prenom">Prénom </label>
        <input type="text" id="prenom" name="prenom" required>

        <label for="telephone">Téléphone </label>
        <input type="tel" id="telephone" name="telephone" required>

        <label for="email">E-mail </label>
        <input type="email" id="email" name="email" required>

        <label for="ville">Ville </label>
        <input type="text" id="ville" name="ville" required>

        <label> Préstation </label>
        <input type="checkbox" id="menage" name="prestation" value="menage">
        <label for="menage">Ménage 5*</label>

        <input type="checkbox" id="blanchisserie" name="prestation" value="blanchisserie">
        <label for="blanchisserie">Blanchisserie</label>

        <input type="checkbox" id="check" name="prestation" value="check">
        <label for="check">Check Out/In</label>

        <input type="checkbox" id="liaison" name="prestation" value="liaison">
        <label for="liaison">Liaison Intervenants</label>

        <label for="type_logement">Type de logement </label>
        <select id="type_logement" name="type_logement" required>
            <option value="appartement">Appartement</option>
            <option value="maison">Studio</option>
            <option value="maison">T2</option>
            <option value="studio">T3</option>
            <option value="studio">T4</option>
            <option value="studio">Villa</option>
        </select>

        <label> Options </label>
        <input type="checkbox" id="piscine" name="disponibilites" value="piscine">
        <label for="piscine">Piscine</label>

        <input type="checkbox" id="spa" name="disponibilites" value="spa">
        <label for="spa">Spa</label>

        <input type="checkbox" id="exterieur" name="disponibilites" value="exterieur">
        <label for="exterieur">Terasse/Jardin</label>

        <label for="nombre_couchages">Nombre de couchages </label>
        <input type="number" id="nombre_couchages" name="nombre_couchages" required>

        <label for="message">Message </label>
        <textarea id="message" name="message" rows="4" required></textarea>

        <button type="submit">Envoyer</button>
    </form>

</body>
</html>


<?php include ("include/basDePage.inc.php");?>