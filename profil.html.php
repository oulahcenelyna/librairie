<!-- partie pour rester  connecter tout le long des pages -->
<?php
session_start();
if (!isset($_SESSION['adresseMail'])){
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
    <!-- Insertion du header -->
    <?php include('layouts/profilHeader.php');?>
  </body>
  <!-- FOOTER  -->
<?php include('layouts/footer.php'); ?>
</html>
