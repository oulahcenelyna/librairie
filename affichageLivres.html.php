<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet">
    <meta charset="utf-8">
    <link rel="stylesheet" href="Style/affichageLivresstyle.css">
    <title>Document</title>
</head>
<body>
    <!-- connexion à la base de données -->
    <?php
      require_once 'layouts/login_librairie.php';

      // Connexion à la base
      $conn = new mysqli($hn, $un, $pw, $db);
      if ($conn->connect_error)  die("Erreur fatale : connexion");

      // Affichage des caractères accentués en utf8
      $query = "set names utf8";
      $result = $conn->query($query);
      if (!$result)  die("Erreur fatale : gestion des caractères");

    ?>
    <!-- Insertion du header -->
    <?php include('layouts/header2.php'); ?>

    <div class="container">
        <!-- Visualisations des details du livre  -->
        <?php include('layouts/partieLivre.php'); ?>   
        <!-- Etagere 3D -->
    <div class="etagere">
    <div class="shelf">
  <div class="top"></div>
  <div class="front"></div>
  <div class="back"></div>
  <div class="left-side"></div>
  <div class="right-side"></div>
    </div>
  <!-- Recommendations basées sur ce livre -->
  <div class="recommendations">
        <div class="row">
          <div class="column">
            <div class="card">
              <h3>Card 1</h3>
              <p>Some text</p>
              <p>Some text</p>
            </div>
          </div>
          <div class="column">
            <div class="card">
              <h3>Card 1</h3>
              <p>Some text</p>
              <p>Some text</p>
            </div>
          </div>
          <div class="column">
            <div class="card">
              <h3>Card 1</h3>
              <p>Some text</p>
              <p>Some text</p>
            </div>
          </div>
          <div class="column">
            <div class="card">
              <h3>Card 1</h3>
              <p>Some text</p>
              <p>Some text</p>
            </div>
          </div>
        </div>
    </div>
</div>
<footer >footer</footer> 
     
</body>

</html>