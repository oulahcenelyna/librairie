<div class="livre">
            
                
            <!-- CATEGORIE informatique  -->
            <?php  //Préparation de la requête
            $query = "select image,auteur,titre,resume
            from ouvrages
            where titre like'%chinois%'
            ";

            //Execution de la requête
            $result = $conn->query($query);
            if(!$result) die("Erreur fatale : requête");

            //Récupérer le resultat
            $rows = $result->num_rows; //Nombres de lignes de données
            
            ?>


            <div class="auteur">
            <?php
                while ( $row = $result-> fetch_array(MYSQLI_ASSOC) ) {
            ?>
            <?php echo  $row['auteur']; ?>
            <?php
                }
            ?>
            </div>
            
        <!-- CATEGORIE informatique  -->
        <?php  //Préparation de la requête
            $query = "select image,auteur,titre,resume
            from ouvrages
            where titre like'%chinois%'
            ";

            //Execution de la requête
            $result = $conn->query($query);
            if(!$result) die("Erreur fatale : requête");

            //Récupérer le resultat
            $rows = $result->num_rows; //Nombres de lignes de données
            
            ?>
        <div class="livreCouverture">
        <?php
                while ( $row = $result-> fetch_array(MYSQLI_ASSOC) ) {
            ?>
            <?php echo '<img src="images/'.$row['image'].'"height="680px ">'; ?>
            <?php
                }
            ?>
        </div>
        <div class="resumeButton">
            <!-- CATEGORIE informatique  -->
        <?php  //Préparation de la requête
            $query = "select image,auteur,titre,resume
            from ouvrages
            where titre like'%chinois%'
            ";

            //Execution de la requête
            $result = $conn->query($query);
            if(!$result) die("Erreur fatale : requête");

            //Récupérer le resultat
            $rows = $result->num_rows; //Nombres de lignes de données
            
            ?>
            <div class="resume">
            <?php
                while ( $row = $result-> fetch_array(MYSQLI_ASSOC) ) {
            ?>
           <p> <?php echo  $row['resume']; ?></p>
            <?php
                }
            ?>
            </div>
            <div class="reserverButton">
               <button>RESERVER</button>
        </div>
        </div>
        

    </div> 