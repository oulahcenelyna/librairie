    <!--Livre Réservé -->

    <?php  
      require "../Modele/DetailReservationModele.php";
      //Préparation de la requête 
      $result=DetailReservation($idEmprunteurtest);
      //Nombres de lignes de données
      $rows = $result->num_rows;
    ?>
    

    <!-- toutes les reservations de l'utilisateurs connecté -->
    <div class="reservation">
      <?php
        //Si le nombre de réservation est différents de 0 alors 
        if ($rows !=0 ){
          echo "<h4 >Vos réservations</h4>";
          //Tant qu'il y a des réservations alors 
          while ( $row = $result-> fetch_array(MYSQLI_ASSOC) ) {
            
            // Afficher les cards des livres
            include '../layouts/cardLivreProfil.php';
          }
        }
        // Sinon Afficher Vous n'avez pas de reservation 
        else {
          echo "<h4 >Vous n'avez pas de reservations</h4>";
        }       
      ?>
    </div>   
 
