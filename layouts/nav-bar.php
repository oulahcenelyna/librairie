<!-- barre de recherche -->
<div class="search">
	<form class="search-form" method="GET">
		<input type="text" name="search"  placeholder="Search for books, authors.." required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" >
		<button type="submit" class="   "><img src="images/research.png" alt="" width="25px" height="25px" class="  "> Rechercher</button>
	</form>
</div>
<!-- icone pour accéder au profil -->
<img  src="images/profil.png" alt=""  class="topright">
<!-- <div>Icônes conçues par <a href="https://www.flaticon.com/fr/auteurs/icongeek26" title="Icongeek26">Icongeek26</a> from <a href="https://www.flaticon.com/fr/" title="Flaticon">www.flaticon.com</a></div> -->
                          
                          