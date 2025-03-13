<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <title>Accueil</title>
    <link rel="icon" type="img/png" href="img/logo-site.png">
</head>
<body>
    <header>
        <div class="logo-conteneur">
            <a href="page-acceuil.html" class="logo"><img src="img/logo.png"></a>
            <span id="test">Time Traveler</span>
        </div>
        <div class="header-links">
            <a href="administrateur.html"><button>Administrateur</button></a>
            <a href="recherche.html"><button>Rechercher</button></a>
            <a href="présentation.html"><button>Notre agence</button></a>
            <a href="profil.html"><button>Profil</button></a>
            <a href="connexion.html"><button>Se connecter / S'inscrire</button></a>
        </div>
    </header>
    <main>
        <h1>Bienvenue sur Time Traveler</h1>
        <p>Explorez nos circuits et découvrez des destinations incroyables.</p>
    </main>
    <script src="js/script.js"></script>
</body>
</html>
