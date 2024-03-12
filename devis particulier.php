<?php include ("include/entete.inc.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Salsa&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f7f8;
            margin-left: 0;
            padding: 0;
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

        <h1> Devis personnalisé </h1>

    <form>
        <label for="nom">Nom </label>
        <input type="text" id="nom" name="nom" required>

        <label for="prenom">Prénom </label>
        <input type="text" id="prenom" name="prenom" required>

        <label for="telephone">Téléphone </label>
        <input type="tel" id="telephone" name="telephone" required>

        <label for="email">E-mail </label>
        <input type="email" id="email" name="email" required>

        <label> Préstation </label>
        <input type="checkbox" id="menage" name="prestation" value="menage">
        <label for="menage">Ménage Régulier</label>

        <input type="checkbox" id="nettoyage" name="prestation" value="nettoyage">
        <label for="nettoyage">Grand Nettoyage</label>

        <input type="checkbox" id="vitres" name="prestation" value="vitres">
        <label for="vitres">Entretien Vitres</label>

        <input type="checkbox" id="travaux" name="prestation" value="travaux">
        <label for="travaux">Avant/après Travaux</label>

        <input type="checkbox" id="demenagement" name="prestation" value="demenagement">
        <label for="demenagement">Avant/après Déménagement</label>

        <input type="checkbox" id="repassage" name="prestation" value="repassage">
        <label for="liarepassageison">Repassage</label>

        <label for="nombre_couchages">Nombre d'heure approximatif </label>
        <input type="number" id="nombre_couchages" name="nombre_couchages" required>

        <label for="nombre_couchages">A partir de quand </label>
        <input type="date" id="date_debut" name="date_debut" required>

        <label for="message">Message </label>
        <textarea id="message" name="message" rows="4" required></textarea>

        <button type="submit">Envoyer</button>
    </form>

</body>
</html>


<?php include ("include/basDePage.inc.php");?>