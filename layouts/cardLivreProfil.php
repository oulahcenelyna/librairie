<?php 
$id = $row['idOuvrage'];
?>
<!--Carte pour ouvrage  -->
<div class="card" >
   <!-- image de la carte  -->
   <div class="card-img" alt="Card image cap">  
   <a href='affichageLivres.php?idOuvrage=<?php echo $id;?>'>
       <?php echo '<img src="../images/'.$row['image'].'"height="300px" width="200px">'; ?></div>
</a>
       <!-- contenu de la carte -->
      <div class="card-body">
         <!-- Affichage du titre, du début de l'emprunt et de la fin de l'emprunt -->
         <h5 class="card-title">Titre: <p><?php echo $row['titre']; ?></p></h5>
         <h5 class="card-title">Date d'emprunt: <p><?php echo $row['debutEmprunt']; ?></p></h5>
         <h5 class="card-title">Fin de l'emprunt: <p><?php echo $row['finEmprunt']; ?></p></h5>
         
      </div>
      <div class="annulerReservation">
         <h6>Annuler une réservation ?</h6>
         
            <p>Pour annuler une réservation vous pouvez : <br> <br> Vous rendre au CDI et faire part de votre demande à la documentaliste.  <br> <br> Envoyer un courriel avec votre demande à l'adresse suivante : </p> 
            <a href="mailto:laPtiteLibrairie@gmail.com"><b>laPtiteLibrairie@gmail.com</b></a>
            
      </div>
   
</div>