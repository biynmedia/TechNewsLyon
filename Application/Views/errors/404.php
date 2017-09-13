<?php 
    # On récupère les paramètres de la Vue
    $params = $this->getParams();
?>

<div class="page-404">
	<p>
		<?= $params['erreur']; ?><br>		
		<img src="http://www.blog-astuces.com/wp-content/uploads/2013/03/erreur404.jpg" alt="">
	</p>
	<a href="<?= PUBLIC_URL; ?>" class="my-btn btn-go-home">
		RETOURNER VERS L'ACCUEIL</a>
</div>
