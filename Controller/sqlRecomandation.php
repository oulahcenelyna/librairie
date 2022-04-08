

<!-- requette pour recueillir l'ID de la catégorie  -->
<?php  

  require '../Modele/CategorieOuvrageModele.php';
  require '../Modele/AfficherRecommandationModele.php';
  //seelctionner l'id du livre selectionné pour en obtenir la catégorie
  $result=CategorieOuvrage();

  while ( $row = $result-> fetch_array(MYSQLI_ASSOC) ) {
    $IdDisciplineLivre=$row['idDiscipline'];
  }

  //  afficher les livres recommandés en fonction de la categorie
  $result=AfficherRecommandation($IdDisciplineLivre);
?>
