<?php include("include/entete.inc.php"); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
  <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
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
        margin-top: 15px;
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


<div class="content-container">
        <section id="photos" class="section-container">
  
          <div class="slideshow">
            <img src="galerie isly/piscine.png" alt="Piscine" class="active">
            <img src="galerie isly/canape.png" alt="Canape">
            <img src="galerie isly/table.png" alt="Table">
            <img src="galerie isly/cuisine.png" alt="Cuisine">
            <img src="galerie isly/chambre.png" alt="Chambre lit double">
            <img src="galerie isly/chambre verte.png" alt="Chambre lit double">
            <img src="galerie isly/chambre doree.png" alt="Chambre lit double">
            <img src="galerie isly/chambre doree2.png" alt="Chambre lit double">
            <img src="galerie isly/chambre twin.png" alt="Chambre deux lit simple">
            <img src="galerie isly/sdb.png" alt="Salle de bain">
            <img src="galerie isly/sdb 2.png" alt="Salle de bain">
            <img src="galerie isly/petit dej.png" alt="Exterieur">
            <img src="galerie isly/piscine 2.png" alt="Piscine">
            <img src="galerie isly/piscine 3.png" alt="Piscine">
            <img src="galerie isly/exterieur.png" alt="Exterieur">
            <img src="galerie isly/table exterieur.png" alt="Table exterieur">
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
              <button class="indicatorButton"></button>
            </div>
            <button class="slideshow-preview-button" id="nextPreviewButton">&gt;</button>
  
        </section>
    
  <div class="contenu">
    <p> Cette maison spacieuse et confortable est parfaite pour des vacances en famille ou entre amis à Carcassonne.<br>
        Elle fait 90 mètres carrés, comprend 3 chambres avec plusieurs rangements et peut accueillir jusqu'à 6 personnes.<br>
        Vous ne pourrez qu'adorer son emplacement à proximité de toutes commodités. <br>
        Au plaisir de vous recevoir. </p>
  </div>

</div>

<div class="rectangles-container">
  <div class="rectangle">Cuisine</div>
  <div class="rectangle">Piscine</div>
  <div class="rectangle">Arrière-cour</div>
  <div class="rectangle">Patio ou balcon </div>
  <div class="rectangle">Wifi</div>
  <div class="rectangle">Télévision</div>
  <div class="rectangle">Lave-linge</div>
  <div class="rectangle">Micro-onde</div>
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
