<?php 
$id = $row['idOuvrage'];
?>
<!--Carte pour ouvrage  -->
<div class="row p-3 ">
   <div class="col-12 col-md-6 col-lg-3  ">
      <div class=" m-1  text-center h-100" style="width:20rem; ">

         <!-- image de la carte  -->
         <div class="card-img-top  mt-2 pt-4 imageCardLivre" alt="Card image cap"><?php echo '<img src="../images/'.$row['image'].'"height="350px" width="84%">'; ?></div>
            <!-- contenu de la carte -->
            <div class="card-body">
           
               
              <!-- Récupération de IdOuvrage pour l'afficher dans l'URL ndu lien ver afficher Livre -->
          <a href='affichageLivres.php?idOuvrage=<?php echo $id;?>'>
           <button class="lienLivre"> Voir plus de détails</button>
          </a>
             
              
               <tr>
        
        <td>
          
        </td>
      </tr>
            </div>

      </div>
   </div>  
</div>                                               