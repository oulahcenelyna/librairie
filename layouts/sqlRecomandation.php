

      <!-- requette pour recueillir l'ID de la catégorie  -->
      <?php  //Préparation de la requête
    $categorieLivreSelectionne=("SELECT disciplines_ouvrages.idDiscipline
      from disciplines,disciplines_ouvrages,ouvrages
      where disciplines.idDiscipline=disciplines_ouvrages.idDiscipline
      AND disciplines_ouvrages.idOuvrage=ouvrages.idOuvrage
      AND ouvrages.idOuvrage= ".$_GET['idOuvrage']);
      

          //Execution de la requête
          $result = $conn->query($categorieLivreSelectionne);
          if(!$result) die("Erreur fatale : categorie ");

          //Récupérer le resultat
          $rows = $result->num_rows; //Nombres de lignes de données


        
        ?>
   
    <?php 
    while ( $row = $result-> fetch_array(MYSQLI_ASSOC) ) {
          $IdDisciplineLivre=$row['idDiscipline'];
        }
          ?>
      

  <!-- afficher les livres recommandés -->
  <?php  //Préparation de la requête
  
      $query = "SELECT * 
      FROM ouvrages,disciplines_ouvrages 
      WHERE ouvrages.idOuvrage=disciplines_ouvrages.idOuvrage 
      AND disciplines_ouvrages.idDiscipline = $IdDisciplineLivre
      AND ouvrages.idOuvrage not like ".$_GET['idOuvrage']; 

      //Execution de la requête
      $result = $conn->query($query);
      if(!$result) die("Erreur fatale : requête");

      //Récupérer le resultat
      $rows = $result->num_rows; //Nombres de lignes de données


    
    ?>