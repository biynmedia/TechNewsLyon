<?php 
    $params = $this->getParams();
    # $this->debug();
?>

<div class="row">
<!--colleft-->
<div class="col-md-8 col-sm-12">
	<div class="box-caption">
		<span>spotlight</span>
	</div>
	<!--spotlight-->
	<section class="owl-carousel owl-spotlight">
		<?php foreach ($params['spotlight'] as $article) : ?>
    		<div>
    			<article class="spotlight-item">
    				<div class="spotlight-img">
    					<img alt="" src="<?= PUBLIC_URL; ?>images/product/<?= $article->getFEATUREDIMAGEARTICLE(); ?>" class="img-responsive" />
    					<a href="#" class="cate-tag"><?= $article->getCategorieObj()->getLIBELLECATEGORIE(); ?></a>
    				</div>
    				<div class="spotlight-item-caption">
    					<h2 class="font-heading">
    						<a href="<?= $article->generateUrl(); ?>">
    							<?= $article->getTITREARTICLE(); ?>
    						</a>
    					</h2>
    					<div class="meta-post">
    						<a href="#">
    							<?= $article->getAuteurObj()->getNOMCOMPLET(); ?>
    						</a>
    						<em></em>
    						<span>
    							<?= $article->getDATECREATIONARTICLE(); ?>
    						</span>
    					</div>
    					<?= $article->getAccroche(); ?>
    				</div>
    			</article>
    		</div>
	  	<?php endforeach; ?>
	</section>

	<!--spotlight-thumbs-->
	<section class="spotlight-thumbs">
		<div class="row">
			<?php foreach ($params['articles'] as $article) : ?>
    			<div class="col-md-4 col-sm-4 col-xs-12">
    				<div class="spotlight-item-thumb">
    					<div class="spotlight-item-thumb-img">
    						<a href="#">
    							<img alt="" src="<?= PUBLIC_URL; ?>images/product/<?= $article->getFEATUREDIMAGEARTICLE(); ?>" />
    						</a>
    						<a href="#" class="cate-tag"><?= $article->getCategorieObj()->getLIBELLECATEGORIE(); ?></a>
    					</div>
    					<h3><a href="<?= $article->generateUrl(); ?>"><?= $article->getTITREARTICLE(); ?></a></h3>
    					<div class="meta-post">
    						<a href="<?= $article->generateUrl(); ?>">
    							<?= $article->getAuteurObj()->getNOMCOMPLET(); ?>
    						</a>
    						<em></em>
    						<span>
    							<?= $article->getDATECREATIONARTICLE(); ?>
    						</span>
    					</div>
    				</div>
    			</div>
			<?php endforeach; ?>
		</div>
	</section>
</div>

<?php include SIDEBAR_SITE; ?>

















