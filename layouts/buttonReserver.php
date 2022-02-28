<div class="reserverButton">
<!-- compter le nombre d'exemplaire disponibles -->
<?php  //Préparation de la requête
  
  $query = "SELECT count(idExemplaire)
  from exemplaires
  where idOuvrage= ".$_GET['idOuvrage']; 

  //Execution de la requête
  $result = $conn->query($query);
  if(!$result) die("Erreur fatale : requête");

  //Récupérer le resultat
  $rows = $result->num_rows; //Nombres de lignes de données

?>
<!-- condition SI le nombre exemplaire > 0  -->
    <button>RESERVER</button>
<!-- condition SI le nombre exemplaire =< 0  -->
</div>