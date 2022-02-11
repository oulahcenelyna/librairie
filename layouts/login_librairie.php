<?php
    $hn='localhost';
    $db='librairie';
    $un='root';
    $pw='';
    require_once 'login_librairie.php';
    // Connexion à la base
    $conn = new mysqli($hn, $un, $pw, $db);
    if ($conn->connect_error)  die("Erreur fatale : connexion");
   
?>