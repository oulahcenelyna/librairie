<div class="livre">
            
                
            <!-- CATEGORIE informatique  -->
            
            <?php
            //On vérifie qu'une variable GET à été transmise
            if(isset($_GET ['idOuvrage']))
            {
                //On se sert de la variable GET pour récupérer l'entrée dans la table correspondant au membre choisi
                $query = "SELECT * FROM ouvrages WHERE idOuvrage = ".$_GET['idOuvrage'];
                //Tu éxécute la requête, et fait un affichage classique...
                
                //Execution de la requête
                $result = $conn->query($query);
                if(!$result) die("Erreur fatale : requête");

                //Récupérer le resultat
                $rows = $result->num_rows; //Nombres de lignes de données
            }
            else die("Aucun utilisateur choisi");
            ?>
            

           


            <div class="auteur">
            <?php
                while ( $row = $result-> fetch_array(MYSQLI_ASSOC) ) {
                    echo  $row['auteur'];
                }
            ?>
            
            </div>


            <?php
            //On vérifie qu'une variable GET à été transmise
            if(isset($_GET ['idOuvrage']))
            {
                //On se sert de la variable GET pour récupérer l'entrée dans la table correspondant au membre choisi
                $query = "SELECT * FROM ouvrages WHERE idOuvrage = ".$_GET['idOuvrage'];
                //Tu éxécute la requête, et fait un affichage classique...
                
                //Execution de la requête
                $result = $conn->query($query);
                if(!$result) die("Erreur fatale : requête");

                //Récupérer le resultat
                $rows = $result->num_rows; //Nombres de lignes de données
            }
            else die("Aucun utilisateur choisi");
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
        <?php
            //On vérifie qu'une variable GET à été transmise
            if(isset($_GET ['idOuvrage']))
            {
                //On se sert de la variable GET pour récupérer l'entrée dans la table correspondant au membre choisi
                $query = "SELECT * FROM ouvrages WHERE idOuvrage = ".$_GET['idOuvrage'];
                //Tu éxécute la requête, et fait un affichage classique...
                
                //Execution de la requête
                $result = $conn->query($query);
                if(!$result) die("Erreur fatale : requête");

                //Récupérer le resultat
                $rows = $result->num_rows; //Nombres de lignes de données
            }
            else die("Aucun utilisateur choisi");
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