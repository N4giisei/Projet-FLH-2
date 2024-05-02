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
            <img src="Galerie/galerie green/vue d'ensemble.png" alt="vue d'ensemble" class="active">
            <img src="Galerie/galerie green/canape.png" alt="canape">
            <img src="Galerie/galerie green/vue canape.png" alt="vue depuis le canape">
            <img src="Galerie/galerie green/table.png" alt="table">
            <img src="Galerie/galerie green/ensemble.png" alt="ensemble">
            <img src="Galerie/galerie green/lit.png" alt="lit">
            <img src="Galerie/galerie green/cuisine.png" alt="cuisine">
            <img src="Galerie/galerie green/cuisine 2.png" alt="cuisine">
            <img src="Galerie/galerie green/cafetiere.png" alt="equipement cuisine">
            <img src="Galerie/galerie green/sdb.png" alt="salle de bain">
            <img src="Galerie/galerie green/sdb 2.png" alt="salle de bain">
            <img src="Galerie/galerie green/vue.png" alt="vue">
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
            </div>
            <button class="slideshow-preview-button" id="nextPreviewButton">&gt;</button>
  
        </section>
    
  <div class="contenu">
    <p>Studio atypique du centre ville de Carcassonne.<br>
        Un appartement agréable avec une cuisine équipée, un espace nuit confortable et sa vue dégagée.<br>
        A seulement une minute à pieds de la place Carnot, et une dizaine de minutes de la cité de Carcassonne, parfait pour un petit séjour.</p>
  </div>

</div>

<div class="rectangles-container">
  <div class="rectangle">Cuisine</div>
  <div class="rectangle">Lave-linge</div>
  <div class="rectangle">Micro-onde</div>
  <div class="rectangle">Réfrigérateur</div>
  <div class="rectangle">Télévision</div>
  <div class="rectangle">Wifi</div>
  <div class="rectangle">Dépot de bagages</div>
  <div class="rectangle">Vue sur la cour</div>

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
