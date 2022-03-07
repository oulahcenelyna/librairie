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

  //echo  " - nbr d'exemplaire de cet ouvrage : ",$nbExemplaire ;
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

  //echo  " - NB exemplaire Restants : ",$nbExemplaireRestant;
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
    
    $exemplaireReserve =  $row['idExemplaire'];
    // date actuelle
    
    $dateActuelle = date('Ymd');
   
    // date dans 2semaines 
    $dateInTwoWeeks =  date("Ymd", mktime(0, 0, 0, date("m"), date("d")+14, date("Y")));
    
    //idEmprunteur 
    $idEmprunteur=2;
    

    
  

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
    <form method="post" action=""  >
		<input type="submit" name="reserver" value="RESERVER ">
	</form>
  
    <?php 
     
    if(isset($_POST['reserver']))
    {	 

      // passer le statut RESERVE du livre a TRUE lors d'appuy sur le bouton envoyer
      $query = "UPDATE exemplaires SET reserve = 1 WHERE idExemplaire= $exemplaireReserve";
      //Execution de la requête
  $result = $conn->query($query);
  if(!$result) die("Erreur fatale : requête");

  

       $idEmprunteurtest = $idEmprunteur;
       $exemplaireReservetest = $exemplaireReserve;
       $dateActuelletest = $dateActuelle;
       $dateInTwoWeekstest = $dateInTwoWeeks;
       $query = "INSERT INTO emprunteurs_exemplaires (idEmprunteur,idExemplaire,debutEmprunt,finEmprunt)
    VALUES ('$idEmprunteurtest','$exemplaireReservetest','$dateActuelletest','$dateInTwoWeekstest')";
   
       if (mysqli_query($conn, $query)) {
        echo "Le livre a bien été reservé !";
        
       } 
      
       
    }
  }
  // cas ou il n'y a PAS d'exemplaires disponibles
  else {
    ?>
    <button>Plus disponible !</button>
    <?php 
  }
 
  ?>
</div>
<!-- script pour ne pas renvoyer le formulaire lors de F5 -->
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
