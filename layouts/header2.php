<header>
   
   
       <div class="edges">
       <div class="ml-3">
       <a href="../Vue/categorieLivres.php"><img src="../images/logo.png" alt="" width="90px" height="90px"></a>
           
        </div>
        <div class="displayCategorie">
        <div class=" edges ">
           <h3 id="currentLivre">Livres</h3>
           <h3><a href="../Vue/categorieLivres.php">Accueil</a></h3>
       </div>
        </div>
        <div class=" end mr-3">
            <a href="../Vue/profil.php" class="imageProfil">
               <img src="../images/profil.png" alt="" width="50px" height="50px">
               <?php 
               $idEmprunteurtest=$_SESSION['emprunteur'];
               //Préparation de la requête 
               //Pour aficher dans la card du livre la debutEmprunt,finEmprunt,image,titre comme information 
               $query = "SELECT COUNT(*)
               from emprunteurs_exemplaires,ouvrages,exemplaires
               where emprunteurs_exemplaires.idExemplaire=exemplaires.idExemplaire
               and exemplaires.idOuvrage=ouvrages.idOuvrage
               and emprunteurs_exemplaires.idEmprunteur=$idEmprunteurtest";
               
                  //Execution de la requête
                  $result = $conn->query($query);
                  if(!$result) die("Erreur fatale : requête");

                  
                  //Récupérer le resultat
                  //Nombres de lignes de données
                  $rows = $result->num_rows;

                  if ($rows !=0 ){
                     ?>
                     <!-- apparition de pastille si des reservations sont faites -->
                     <span class="pastille">1</span>
                     <?php 
                   }
               ?>
               
            </a>
        </div>
       </div>
       
       <?php include '../layouts/nav-bar.php'?>
  
        
    </header>