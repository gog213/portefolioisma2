<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon CV - Ismaël Nebbache</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
            color: #333;
        }

        .cv-container {
            max-width: 900px;
            margin: 50px auto;
            padding: 20px;
            background: white;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .cv-header {
            text-align: center;
            padding-bottom: 20px;
            border-bottom: 2px solid #3a1c71;
        }

        .cv-header h1 {
            font-weight: 700;
            color: #3a1c71;
        }

        .cv-header img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #3a1c71;
        }

        .cv-section {
            padding: 20px 0;
        }

        .cv-section h3 {
            font-weight: 600;
            color: #3a1c71;
            border-left: 4px solid #d76d77;
            padding-left: 10px;
            margin-bottom: 15px;
        }

        .cv-item {
            margin-bottom: 10px;
        }

        .cv-item i {
            color: #d76d77;
            margin-right: 10px;
        }

        .badge-custom {
            background: linear-gradient(to right, #3a1c71, #d76d77);
            padding: 8px 12px;
            border-radius: 20px;
            color: white;
            font-weight: 600;
        }

        .skills-list {
            list-style: none;
            padding: 0;
        }

        .skills-list li {
            display: inline-block;
            margin: 5px;
            padding: 8px 15px;
            background: #3a1c71;
            color: white;
            border-radius: 15px;
            font-size: 14px;
        }
    </style>
</head>
<body>

<div class="cv-container">
    <!-- En-tête du CV -->
    <div class="cv-header">
        <img src="image.png" alt="Photo de profil">
        <h1>Ismaël Nebbache</h1>
        <p class="badge-custom">Étudiant en troisième année de Licence MIAGE</p>
    </div>

    <!-- Informations personnelles -->
    <div class="cv-section">
        <h3><i class="fas fa-user"></i> Informations</h3>
        <div class="cv-item"><i class="fas fa-home"></i> 5 rue Descartes, Evry-Courcouronnes (91)</div>
        <div class="cv-item"><i class="fas fa-phone"></i> 06.52.95.74.37</div>
        <div class="cv-item"><i class="fas fa-envelope"></i> nbc.ismael@gmail.com</div>
        <div class="cv-item"><i class="fas fa-birthday-cake"></i> Né le 07/02/2005</div>
        <div class="cv-item"><i class="fas fa-car"></i> Permis B (véhicule)</div>
        <div class="cv-item"><i class="fas fa-globe"></i> <a href="https://portefolioisma2.onrender.com" target="_blank">Mon Portefolio</a></div>
    </div>

    <!-- Formation -->
    <div class="cv-section">
        <h3><i class="fas fa-graduation-cap"></i> Formation</h3>
        <div class="cv-item"><strong>2025 :</strong> Obtention du BTS SIO option SLAM (en cours)</div>
        <div class="cv-item"><strong>2023 :</strong> BAC Général Spécialité Maths et Numérique (Mention Bien)</div>
    </div>

    <!-- Expériences -->
    <div class="cv-section">
        <h3><i class="fas fa-briefcase"></i> Expériences</h3>
        <div class="cv-item"><strong>2023-2025 :</strong> Stages chez NtouchProduction (Développement Web)</div>
        <div class="cv-item"><strong>2023-2024 :</strong> Entraîneur de natation (SCA 2000 EVRY)</div>
    </div>

    <!-- Compétences -->
    <div class="cv-section">
        <h3><i class="fas fa-code"></i> Compétences</h3>
        <ul class="skills-list">
            <li>Java (Swing, JavaFX, MVC)</li>
            <li>PHP, JavaScript, HTML5, CSS3</li>
            <li>MySQL (Requêtes préparées, Sécurisation)</li>
            <li>Frameworks MVC</li>
            <li>GLPI (Gestion d'incidents, Support IT)</li>
        </ul>
    </div>

    <!-- Langues -->
    <div class="cv-section">
        <h3><i class="fas fa-language"></i> Langues</h3>
        <ul class="skills-list">
            <li>Anglais : B1</li>
            <li>Espagnol : B1</li>
            <li>Arabe : A2</li>
        </ul>
    </div>

    <!-- Certifications -->
    <div class="cv-section">
        <h3><i class="fas fa-certificate"></i> Certifications</h3>
        <ul class="skills-list">
            <li>Cisco : Réseaux & Cybersécurité</li>
            <li>RGPD : Certification CNIL</li>
            <li>Cisco : Gestion des cybermenaces</li>
        </ul>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
