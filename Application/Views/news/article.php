<?php 
    use Application\Model\Traits\Shortcut;
use Application\Model\Helper;
    # Je récupère les paramètres de ma vue
    $params         = $this->getParams();
    $article        = $params['article'];
    $suggestions    = $params['suggestions'];
    #$this->debug();
?>

<div class="row">
    <!--colleft-->
    <div class="col-md-8 col-sm-12">
        <!--post-detail-->
        <article class="post-detail">
            <h1><?= $article->TITREARTICLE; ?></h1>
            <div class="meta-post">
                <a href="#">
                    <?= $article->PRENOMAUTEUR; ?> <?= $article->NOMAUTEUR; ?>
                </a>
                <em></em>
                <span>
                    <?= $article->DATECREATIONARTICLE; ?>
                </span>
            </div>

			<?= $article->CONTENUARTICLE; ?>
			
            <h5 class="text-right font-heading"><strong><?= $article->PRENOMAUTEUR; ?> <?= $article->NOMAUTEUR; ?></strong> </h5>

        </article>
        <!--social-detail-->
        <div class="social-detail">
            <span>Partager notre article</span>

            <ul class="list-social-icon">
                <li>
                    <a href="#" class="facebook">
                        <i class="fa fa-facebook"></i>
                    </a>
                </li>
                <li>
                    <a href="#" class="twitter">
                        <i class="fa fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="#" class="google">
                        <i class="fa fa-google"></i>
                    </a>
                </li>
                <li>
                    <a href="#" class="youtube">
                        <i class="fa fa-youtube-play"></i>
                    </a>
                </li>
                <li>
                    <a href="#" class="pinterest">
                        <i class="fa fa-pinterest-p"></i>
                    </a>
                </li>
                <li>
                    <a href="#" class="rss">
                        <i class="fa fa-rss"></i>
                    </a>
                </li>

            </ul>
        </div>

        <!--related post-->
        <div class="detail-caption">
            <span>Dans la même catégorie</span>
        </div>
        <section class="spotlight-thumbs spotlight-thumbs-related">
            <div class="row">
            	<?php foreach ($suggestions as $article) : ?>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="spotlight-item-thumb">
                            <div class="spotlight-item-thumb-img">
                                <a href="<?= Helper::generateUrl($article->IDARTICLE, $article->TITREARTICLE); ?>">
                                    <img alt="" src="<?= PUBLIC_URL ?>/images/product/<?= $article->FEATUREDIMAGEARTICLE; ?>">
                                </a>
                                <a href="#" class="cate-tag"><?= $article->LIBELLECATEGORIE; ?></a>
                            </div>
                            <h3><a href="<?= Helper::generateUrl($article->IDARTICLE, $article->TITREARTICLE); ?>"><?= $article->TITREARTICLE; ?></a></h3>
                            <div class="meta-post">
                                <a href="#">
                                    <?= $article->PRENOMAUTEUR; ?> <?= $article->NOMAUTEUR; ?>
                                </a>
                                <em></em>
                                <span>
                                    <?= $article->DATECREATIONARTICLE; ?>
                                </span>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    </div>
    
    <?php include SIDEBAR_SITE; ?>
    
</div>











