<?php 
    $conn = new mysqli($hn, $un, $pw, $db);

    if(isset($_GET['search']))
    {
        $filtervalues = $_GET['search'];
        $query = "SELECT * FROM ouvrages WHERE CONCAT(titre,auteur) LIKE '%$filtervalues%' LIMIT 6 ";
        $query_run = mysqli_query($conn, $query);

        if(mysqli_num_rows($query_run) > 0)
        {
?>
            <h2 class="ml-3 mt-3">Resultat des recherches : </h2>
            <div class=" d-flex align-content-start flex-wrap ">
                <?php
                    foreach($query_run as $row)
                    {
                ?>
                            
                <?php include('layouts/cardLivre.php'); ?>
                        
                <?php } ?>
            </div>
            <?php
                }
        else
        {
            ?>
            <h2 class="ml-3 mt-3">Resultat des recherches : </h2>
            <p class=" pl-3 text-muted" style = " font-size : 30px;"> Aucun résultat trouvé  </p>
            <?php
        }
    }
            ?>
                           
                           
                           
