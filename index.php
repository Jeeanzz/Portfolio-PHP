<?php
require_once(__DIR__ . '/config/mysql.php');
require_once(__DIR__ . '/databaseconnect.php');
require_once(__DIR__ . '/variables.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio DevSecOps</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="navbar">
        <div class="logo">Portfolio DevSecOps</div>
        <button class="hamburger" onclick="toggleMenu()">☰</button>
        <ul class="nav-links">
            <li><a href="index.php" class="btn">Accueil</a></li>
            <li><a href="project1.php" class="btn">Projet 1</a></li>
            <li><a href="project2.php" class="btn">Projet 2</a></li>
            <li><a href="project3.php" class="btn">Projet 3</a></li>
            <li><a href="project4.php" class="btn">Projet 4</a></li>
            <li><a href="project5.php" class="btn">Projet 5</a></li>
            <li><a href="https://drive.google.com/file/d/1AxfMFacukXJYFUqLmrTgfkdisQbb0iGi/view?usp=sharing" target="_blank" class="btn-download">Télécharger le CV</a></li>
        </ul>
    </header>

    <section class="hero">
        <div class="hero-content">
            <div class="hero-image">
                <img src="images/payt.png" alt="Photo de profil Payt">
            </div>
            <div class="hero-text">
                <h1>Payt Rugby</h1>
                <p>Ingénieur DevSecOps | Expert en Sécurité Applicative et Intégration Continue
                </p>
            </div>
        </div>
    </section>

    <section class="cv">
        <div class="cv-header">
            <h2>À propos de moi</h2>
        </div>
        <div class="cv-info">
            <div class="personal-info">
                <h3>Informations personnelles</h3>
                <ul>
                    <li><strong>Adresse :</strong> 56 rue du dindon, 75017 Paris</li>
                    <li><strong>Email :</strong> paytrugby@gmail.com</li>
                    <li><strong>Téléphone :</strong> +33 6 12 34 56 78</li>
                </ul>
            </div>

            <div class="skills">
                <h3>Compétences</h3>
                <ul>
                    <li>Langages : Python, Bash, JavaScript</li>
                    <li>Outils CI/CD : Jenkins, GitLab CI, Azure DevOps</li>
                    <li>Sécurité : OWASP, SAST, DAST, Burp Suite</li>
                    <li>Cloud : AWS, Kubernetes, Docker</li>
                    <li>Monitoring : ELK Stack, Prometheus, Grafana</li>
                </ul>
            </div>

            <div class="education">
                <h3>Formation</h3>
                <ul>
                    <li>Master en cybersécurité - École supérieure de cybersécurité, Paris (2018 - 2020)</li>
                    <li>Licence en informatique - Université de Lyon, Lyon (2015 - 2018)</li>
                </ul>
            </div>

            <div class="interests">
                <h3>Centres d'intérêt</h3>
                <ul>
                    <li>Cybersécurité et hacking éthique</li>
                    <li>Développement d'outils de sécurité open source</li>
                    <li>Randonnées et voyages</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="gallery">
        <h2>Mes projets</h2>
        <div class="gallery-grid">
            <div class="gallery-item">
                <a href="project1.php">
                    <img src="images/projet1.jpg" alt="Projet 1">
                </a>
                <p>Projet 1 : Pipeline CI/CD Sécurisé</p>
            </div>
            <div class="gallery-item">
                <a href="project2.php">
                    <img src="images/projet2.jpg" alt="Projet 2">
                </a>
                <p>Projet 2 : Infrastructure "Security-as-Code"</p>
            </div>
            <div class="gallery-item">
                <a href="project3.php">
                    <img src="images/projet3.jpg" alt="Projet 3">
                </a>
                <p>Projet 3 : Analyse des dépendances logicielles</p>
            </div>
            <div class="gallery-item">
                <a href="project4.php">
                    <img src="images/projet4.jpg" alt="Projet 4">
                </a>
                <p>Projet 4 : Plateforme de surveillance</p>
            </div>
            <div class="gallery-item">
                <a href="project5.php">
                    <img src="images/projet5.jpg" alt="Projet 5">
                </a>
                <p>Projet 5 : Formation à la sécurité</p>
            </div>
        </div>
    </section>
    
    <footer>
        <p>&copy; 2024 Portfolio DevSecOps - Tous droits réservés</p>
    </footer>
    
    <script src="menu.js"></script>

</body>
</html>
