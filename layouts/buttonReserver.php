<div class="reserverButton">
<!-- compter le nombre d'exemplaires de l'ouvrage  -->
<?php  //Préparation de la requete 
  
  
  $query = "SELECT count(idExemplaire)as nbrExemplaire
  from exemplaires
  where idOuvrage= ".$_GET['idOuvrage']; 

  //Execution de la requête
  $result = $conn->query($query);
  if(!$result) die("Erreur fatale : requête");

  //Récupérer le resultat
  $rows = $result->num_rows; //Nombres de lignes de données
 
?>

  <?php 
  while ( $row = $result-> fetch_array(MYSQLI_ASSOC) ) { 
  $nbExemplaire=$row['nbrExemplaire'];

  $idOuvrage=$_GET['idOuvrage'];

  echo  " - nbr d'exemplaire de cet ouvrage : ",$nbExemplaire ;
  }
  ?>
  <!-- compter le nombre d'exemplaire disponibles a la reservation  -->
<?php  //Préparation de la requete 
  
  
  $query = "SELECT count(idExemplaire)as nbrExemplaireRestant
  from exemplaires
  where reserve is null
  and idOuvrage= ".$_GET['idOuvrage']; 

  //Execution de la requête
  $result = $conn->query($query);
  if(!$result) die("Erreur fatale : requête");

  //Récupérer le resultat
  $rows = $result->num_rows; //Nombres de lignes de données
 
?>

  <?php 
  while ( $row = $result-> fetch_array(MYSQLI_ASSOC) ) { 
  $nbExemplaireRestant=$row['nbrExemplaireRestant'];

  echo  " - NB exemplaire Restants : ",$nbExemplaireRestant;
  }
  ?>


  <!-----------------------------------------------------
  ----------- Selectionner Un SEUL exemplaire -----------
---------------------------------------------------------->
<?php  //Préparation de la requete 
  
  
  $query = "SELECT idExemplaire,reserve
  from exemplaires
  where reserve is  null
  and idOuvrage= $idOuvrage 
  limit 1"; 

  //Execution de la requête
  $result = $conn->query($query);
  if(!$result) die("Erreur fatale : requête");

  //Récupérer le resultat
  $rows = $result->num_rows; //Nombres de lignes de données
 
?>

  <?php 
  while ( $row = $result-> fetch_array(MYSQLI_ASSOC) ) { 
    
    $exemplaireReserve = $row['idExemplaire'];
    echo " - id de l'exemplaire reserve : ",$exemplaireReserve;
  }
  ?>
   <!-----------------------------------------------------
  ----------- Condition du type d'affichage du bouton RESERVER ( IF ) -----------
---------------------------------------------------------->     
<?php 
// cas ou il y a des exemplaires disponibles 
  if ($nbExemplaireRestant>0){
    // bouton reserver normal 
    ?>
    <button>RESERVER maintenant </button>
    <?php 
  }
  // cas ou il n'y a PAS d'exemplaires disponibles
  else {
    ?>
    <button>Plus disponible !</button>
    <?php 
  }
 
  ?>

<!-- condition SI le nombre exemplaire > 0  -->
  
<!-- condition SI le nombre exemplaire =< 0  -->
</div>