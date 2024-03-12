<?php include ("include/entete.inc.php"); ?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Salsa&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya&display=swap" rel="stylesheet">
    <title>Formulaire de Recrutement</title>
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
</head>
<body>

<h1> Rejoignez nous !!</h1>
    <form action="#" method="post">
        <label for="nom">Nom </label>
        <input type="text" id="nom" name="nom" required>

        <label for="prenom">Prénom </label>
        <input type="text" id="prenom" name="prenom" required>

        <label for="telephone">Numéro de téléphone </label>
        <input type="tel" id="telephone" name="telephone" required>

        <label for="email">Email </label>
        <input type="email" id="email" name="email" required>

        <label>Disponibilités </label>
        <input type="checkbox" id="semaine" name="disponibilites" value="semaine">
        <label for="semaine">Semaine</label>

        <input type="checkbox" id="weekend" name="disponibilites" value="weekend">
        <label for="weekend">Weekend</label>

        <input type="checkbox" id="vacances" name="disponibilites" value="vacances">
        <label for="vacances">Vacances</label>

        <label for="date">À partir de quand </label>
        <input type="date" id="date" name="date" required>

        <label for="oui">Véhicule  </label>
        <input type="radio" id="oui" name="vehicule" value="oui">
        <label for="oui">Oui</label>

        <input type="radio" id="non" name="vehicule" value="non">
        <label for="non">Non</label>

        <label for="cv">Joindre un fichier (CV) </label>
        <input type="file" id="cv" name="cv">

        <label for="message">Message </label>
        <textarea id="message" name="message" rows="4" required></textarea>

        <button type="submit">Envoyer</button>
    </form>
</body>
</html>


<?php include ("include/basDePage.inc.php");?>