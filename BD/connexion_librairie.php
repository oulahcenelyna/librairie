<?php 
 // Connexion à la base
 $conn = new mysqli($hn, $un, $pw, $db);
 if ($conn->connect_error)  die("Erreur fatale : connexion");

 // Affichage des caractères accentués en utf8
 $query = "set names utf8";
 $result = $conn->query($query);
 if (!$result)  die("Erreur fatale : gestion des caractères");
?>