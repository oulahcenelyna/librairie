<?php 
$id = $row['idOuvrage'];
?>
<!--Carte pour ouvrage  -->
<div class="row p-3 ">
   <div class="col-12 col-md-6 col-lg-3  ">
      <div class=" m-1  text-center h-100" style="width:20rem; ">

         <!-- image de la carte  -->
         <div class="card-img-top  mt-2" alt="Card image cap"><?php echo '<img src="images/'.$row['image'].'"height="350px ">'; ?></div>
            <!-- contenu de la carte -->
            <div class="card-body">
               <h5 class="card-title"><?php echo $row['titre']; ?></h5>
               <p class="card-text"><small class="text-muted"><?php echo $row['auteur'];?> <?php echo  $id;?></small></p>
               
               <!-- essai de connexion dynamique -->
               <tr>
        <td>
        <td>
          <!-- Récupération de IdOuvrage pour l'afficher dans l'URL ndu lien ver afficher Livre -->
          <a href='affichageLivres.html.php?idOuvrage=<?php echo $id;?>'>
            <?php echo htmlspecialchars($row['titre']); ?>
          </a>
        </td>
      </tr>
            </div>

      </div>
   </div>  
</div>                                               