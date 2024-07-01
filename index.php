<?php
include 'log_visits.php';

// Enregistrement d'une visite lorsque index.php est chargé
logVisit('Accès à la page index.php');

// Exemple d'enregistrement d'une visite avec des détails supplémentaires
logVisit('Utilisateur connecté depuis l\'adresse IP : ' . $_SERVER['REMOTE_ADDR']);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bienvenue à Gloire le motivateur</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Custom CSS -->
  <style>
    body {
      background-color: #f8f9fa;
    }
    .jumbotron {
      background-color: #343a40;
      color: #ffffff;
      padding: 100px 25px;
      margin-bottom: 0;
      text-align: center;
    }
    footer {
      background-color: #343a40;
      color: #ffffff;
      padding: 20px 0;
      text-align: center;
      position: absolute;
      bottom: 0;
      width: 100%;
    }
  </style>
</head>
<body>
  <div class="container">
    <header class="jumbotron">
      <h1 class="display-4">Bienvenue à Gloire le motivateur</h1>
      <p class="lead">Inspirer et encourager à travers la foi chrétienne.</p>
    </header>

    <!-- Contenu principal de la page -->

    <footer>
      <p>&copy; 2024 Gloire le motivateur. Tous droits réservés.</p>
    </footer>
  </div>

  <!-- Bootstrap JS (facultatif, pour les fonctionnalités avancées comme les modales, les carrousels, etc.) -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <?php
  // Inclure le fichier de journalisation log_visits.php
  include 'log_visits.php';

  // Fonction de journalisation pour enregistrer la visite de la page index.php
  logVisit('Accès à la page index.php');
  ?>
</body>
</html>

