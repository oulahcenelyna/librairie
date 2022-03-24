<!--Carte pour ouvrage  -->
<div class="card" >
   <!-- image de la carte  -->
   <div class="card-img" alt="Card image cap"><?php echo '<img src="images/'.$row['image'].'"height="350px ">'; ?></div>
      <!-- contenu de la carte -->
      <div class="card-body">
         <!-- Affichage du titre, du début de l'emprunt et de la fin de l'emprunt -->
         <h5 class="card-title"><p>Titre:</p> <?php echo $row['titre']; ?></h5>
         <h5 class="card-title"><p>Date d'emprunt:</p> <?php echo $row['debutEmprunt']; ?></h5>
         <h5 class="card-title"><p>Fin de l'emprunt: </p><?php echo $row['finEmprunt']; ?></h5>
      </div>
   </div>
</div>