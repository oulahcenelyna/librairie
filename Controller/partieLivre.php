<?php require "../Modele/PartieLivreModele.php"?>

<div class="livre">
            
    <?php
        //Recuperre l'id de l'ouvrage qui a été selectionné
        if(isset($_GET ['idOuvrage']))
        {
            $result = PartieLivre();
        }
        else die("Aucun ouvrage choisi");
    ?>

    <!-- Affichage de l'auteur -->
    <div class="auteur">
        <div class="imgAuteur">
            <img src="../images/auteur.png" alt="">
        </div>
        <div  class="nomAuteur">
            <?php
                while ( $row = $result-> fetch_array(MYSQLI_ASSOC) )
                {
                    echo  $row['auteur'];
                }
            ?>
        </div>  
    </div>
            
    <!-- affichage de la couverture du livre -->
    <?php
        //On vérifie qu'une variable GET à été transmise
        if(isset($_GET ['idOuvrage']))
        {
            $result = PartieLivre();
    
        }
        else die("Aucun ouvrage choisi");
    ?>
    <div class="livreCouverture">
        <?php
            while ( $row = $result-> fetch_array(MYSQLI_ASSOC) ) {
        
                 echo '<img src="../images/'.$row['image'].'"height="680px ">'; 
        
            }
        ?>
    </div>
    
    <div class="resumeButton">
        <?php
            //On vérifie qu'une variable GET à été transmise
            if(isset($_GET ['idOuvrage']))
            {
                $result = PartieLivre();
 
            }
            else die("Aucun ouvrage choisi");
        ?>
        <!-- affichage du resumé du livre -->
        <div class="resume">
            <?php
                while ( $row = $result-> fetch_array(MYSQLI_ASSOC) ) {
            ?>
            <p> <?php echo  $row['resume']; ?></p>
            <?php
                }
            ?>
        </div>
        <!-- Phrase d'avertissement du temps de reservation-->
        <div class="tempsReservationAlerte ">
            <img src="../images/alerte.png" alt="">
            <h6>Une fois réservé le livre est à votre disposition pendant 15 jours </h6>
        </div>
        <!-- Button pour reserver  -->
        <div class="buttonResponsive">
            <?php include ('../Controller/buttonReserver.php')?>
        </div>
    </div>
</div> 