<!-- partie pour rester  connecter tout le long des pages -->
<?php
session_start();
 // identification de l'utilisateur connecté avec son idEmprunteur
 $idEmprunteurtest=$_SESSION['emprunteur'];
if (!isset($_SESSION['adresseMail'],$_SESSION['emprunteur'])){
  header('Location:./index.php');
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="Style/profilStyle.css">
    <meta charset="utf-8">
    <title>Profil </title>
  </head>
  <body>
    <!-- connexion à la base de données -->
    <?php
      require_once 'BD/login_librairie.php';
      require_once 'BD/connexion_librairie.php';
     

    ?>

    <!-- Insertion du header -->
    <?php include 'layouts/header.php'?>


    <div class="container">
      <!-- corps de la page avec les reservations effectuées -->
    <?php include('layouts/profilHeader.php');?>
    </div>

  </body>

  <!-- FOOTER  -->
  <?php include('layouts/footer.php'); ?>
  

</html>
