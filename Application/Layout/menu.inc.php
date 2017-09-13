<?php 
    # Je récupère l'action
    $current = ucfirst($this->getAction());
?>

<!--menu mobile-->
<nav class="menu-res hidden-lg hidden-md ">
	<div class="menu-res-inner">
		<ul>
			<?php foreach ($categories as $categorie) : ?>
    				<li <?php if($categorie->getLIBELLECATEGORIE() == $current) : ?> class="current" <?php endif; ?>> 
    					<a href="<?= PUBLIC_URL; ?><?= $categorie->getROUTECATEGORIE(); ?>">
    						<?= $categorie->getLIBELLECATEGORIE(); ?>
    					</a>
    				</li>
    			<?php endforeach; ?>
		</ul>
	</div>
</nav>
<div class="page">
	<div class="container">
		<!--header-->
		<header class="header">
			<div class="row">
				<div class="col-md-3 col-sm-4 col-xs-12">
					<a href="#" class="logo">
						<img alt="Logo" src="<?= PUBLIC_URL ?>/images/logo.png" />
					</a>
				</div>
			</div>
		</header>
		<!--menu-->
		<nav class="menu font-heading">
			<div class="menu-icon hidden-lg hidden-md">
				<i class="fa fa-navicon"></i>
				<span>MENU</span>
			</div>
			<ul class="hidden-sm hidden-xs">
				<?php foreach ($categories as $categorie) : ?>
    				<li <?php if($categorie->getLIBELLECATEGORIE() == $current) : ?> class="current" <?php endif; ?>>
    					<a href="<?= PUBLIC_URL; ?><?= $categorie->getROUTECATEGORIE(); ?>">
    						<?= $categorie->getLIBELLECATEGORIE(); ?>
    					</a>
    				</li>
    			<?php endforeach; ?>		
			</ul>
			<div class="search-icon">
				<div class="search-icon-inner">
					<i class="fa fa-search"></i>
				</div>
				<div class="search-box">
					<input type="text" placeholder="Rechercher..." />
					<button>Lancer</button>
				</div>
			</div>
		</nav>