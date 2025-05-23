<?php include("include/entete.inc.php"); ?>

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
        margin: 0;
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

    .content-container {
        display: flex;
        justify-content: space-between;
      }

    .contenu {
        width: 500px; 
        height: 300px;
        padding: 25px;
        background-color: #FED8D8; /* Couleur de fond pour le texte */
        border-radius: 10px; /* Coins arrondis */
        margin-right: 250px;
        margin-top: 100px; /* Ajout de l'espace à droite */
    }

    .contenu p {
        text-align: center;
        margin-top: 50px;
        font-family: 'Lobster' , sans-serif;
        font-size: 25px;
        color: #903C3E;
    }

    .rectangles-container {
      clear: both;
      padding: 20px;
      margin-left: 90px; 
    }

    .rectangle {
      width: 150px;
      height: 50px;
      background-color: #f9f7f8; /* Couleur de fond des carrés */
      border: 2px solid #feb6b7; /* Bordure rose */
      border-radius: 10px;
      margin-left: 30px;
      margin-bottom: 20px;
      display: inline-block;
      text-align: center; /* Centrez le texte à l'intérieur du rectangle */
      line-height: 50px;
      font-family: 'Lobster' , sans-serif;
      font-size: 20px;
      color: #903C3E;
    }

    #photos {
      width: 48%;
      margin-bottom: 20px;
    }

    .slideshow {
      position: relative;
      height: 400px;
      width: ;
    }

    .slideshow img {
      position: absolute;
      top: 50px;
      left: 150px;
      width: 800px;
      height: 500px;
      opacity: 0;
      transition: opacity 0.5s ease-in-out;
      border-radius: 20px;
      margin-top: -20px;
    }

    .slideshow img.active {
      opacity: 1;
    }

    .slideshow-nav {
      text-align: center;
      margin-bottom: 30px;
    }

    .slideshow-nav button {
      background-color: transparent;
      border: none;
      color: #FF9697;
      font-size: 24px;
      cursor: pointer;
      padding: 5px 10px;
      display: none;
  
    }

    .slideshow-preview {
      display: flex;
      align-items: center;
      margin-left: 350px; 
      margin-top: 150px; 
    }

    .slideshow-preview-button {
      background-color: transparent;
      border: none;
      color: #FF7B7D;
      font-size: 24px;
      cursor: pointer;
      padding: 5px 10px;
    }

    .slideshow-indicators {
      display: flex;
      justify-content: ;
      align-items: ;
      margin: 10px;
    }

    .indicatorButton {
      background-color: #FED8D8;
      border: none;
      width: 10px;
      height: 10px;
      border-radius: 50%;
      margin: 0 5px;
      padding: 0;
      cursor: pointer;
    }

    .indicatorButton.active {
      background-color: #FF7B7D;
    }
  </style>
  <title>The family home</title>
</head>
<body>

<a href="Hébergement.php" class="boutonRetour">Retour</a>

<div class="content-container">
        <section id="photos" class="section-container">
  
          <div class="slideshow">
            <img src="Galerie/galerie costes/salon.png" alt="salon" class="active">
            <img src="Galerie/galerie costes/canape.png" alt="canape">
            <img src="Galerie/galerie costes/table.png" alt="table">
            <img src="Galerie/galerie costes/télé.png" alt="télévision">
            <img src="Galerie/galerie costes/table basse .png" alt="table basse">
            <img src="Galerie/galerie costes/cuisine.png" alt="cuisine">
            <img src="Galerie/galerie costes/table cuisine.png" alt="table cuisine">
            <img src="Galerie/galerie costes/couloir.png" alt="couloir">
            <img src="Galerie/galerie costes/couloir 2.png" alt="couloir">
            <img src="Galerie/galerie costes/bureau.png" alt="bureau">
            <img src="Galerie/galerie costes/chambre.png" alt="chambre">
            <img src="Galerie/galerie costes/lit.png" alt="lit">
            <img src="Galerie/galerie costes/chmabre 2.png" alt="chambre 2">
            <img src="Galerie/galerie costes/lit 2.png" alt="lit 2">
            <img src="Galerie/galerie costes/sdb.png" alt="salle de bain">
          </div>
  
          <div class="slideshow-nav">
            <button id="prevButton">&lt;</button>
            <button id="nextButton">&gt;</button>
          </div>
  
          <div class="slideshow-preview">
            <button class="slideshow-preview-button" id="prevPreviewButton">&lt;</button>
            <div class="slideshow-indicators">
              <button class="indicatorButton active"></button>
              <button class="indicatorButton"></button>
              <button class="indicatorButton"></button>
              <button class="indicatorButton"></button>
              <button class="indicatorButton"></button>
              <button class="indicatorButton"></button>
              <button class="indicatorButton"></button>
              <button class="indicatorButton"></button>
              <button class="indicatorButton"></button>
              <button class="indicatorButton"></button>
              <button class="indicatorButton"></button>
              <button class="indicatorButton"></button>
              <button class="indicatorButton"></button>
              <button class="indicatorButton"></button>
              <button class="indicatorButton"></button>
            </div>
            <button class="slideshow-preview-button" id="nextPreviewButton">&gt;</button>
  
        </section>
    
  <div class="contenu">
    <p>Unique et Majestueux, hauts plafonds, moulures, carreaux de ciment, tomettes anciennes, jadis, cet appartement a été occupé par Louis 16.<br>
        Situé dans le centre historique de Carcassonne, à seulement quelques pas de la place principale de la ville 
        (place Carnot), et à 10 min à pieds de La Cité.</p>
  </div>

</div>

<div class="rectangles-container">
  <div class="rectangle">Cuisine</div>
  <div class="rectangle">Lave-linge</div>
  <div class="rectangle">Sèche-linge</div>
  <div class="rectangle">Lit pour bébé</div>
  <div class="rectangle">Wifi</div>
  <div class="rectangle">Cheminée</div>
  <div class="rectangle">Baignoire</div>
  <div class="rectangle">Télévision</div>
</div>

  <script>

// script.js
document.addEventListener("DOMContentLoaded", function() {
// Sélection des éléments HTML nécessaires
var prevButton = document.getElementById("prevButton");
var nextButton = document.getElementById("nextButton");
var prevPreviewButton = document.getElementById("prevPreviewButton");
var nextPreviewButton = document.getElementById("nextPreviewButton");
var slides = document.querySelectorAll(".slideshow img");
var indicators = document.querySelectorAll(".indicatorButton");

// Variables de contrôle du diaporama
var currentIndex = 0;
var totalSlides = slides.length;

// Fonction pour afficher la diapositive suivante
function nextSlide() {
slides[currentIndex].classList.remove("active");
indicators[currentIndex].classList.remove("active");
currentIndex = (currentIndex + 1) % totalSlides;
slides[currentIndex].classList.add("active");
indicators[currentIndex].classList.add("active");
}

// Fonction pour afficher la diapositive précédente
function previousSlide() {
slides[currentIndex].classList.remove("active");
indicators[currentIndex].classList.remove("active");
currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
slides[currentIndex].classList.add("active");
indicators[currentIndex].classList.add("active");
}

// Gestionnaires d'événements pour les boutons de navigation
prevButton.addEventListener("click", previousSlide);
nextButton.addEventListener("click", nextSlide);
prevPreviewButton.addEventListener("click", previousSlide);
nextPreviewButton.addEventListener("click", nextSlide);
});
</script>

</body>
</html>

<?php include("include/basDePage.inc.php"); ?>
