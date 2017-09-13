<?php 
    # Importation des Classes
    use Application\Model\Categorie\CategorieDb;
    use Application\Model\Tags\TagsDb;
use Application\Model\Article\ArticleDb;

    # Récupération des Catégories du Site
    $CategorieDb = new CategorieDb();
    $categories  = $CategorieDb->fetchAll();
    
    # Récupération des Tags du site
    $TagsDb = new TagsDb();
    $tags   = $TagsDb->fetchAll();
    
    # Récupération des 5 derniers articles de la BDD
    $ArticleDb  = new ArticleDb();
    $sidebar    = $ArticleDb->fetchAll(null, 
        'DATECREATIONARTICLE DESC', 5);
    $special    = $ArticleDb->fetchAll('SPECIALARTICLE = 1');
    
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="congnd91">
    <title>TEZ NEWS | Magagize & News HTML Template</title>
    <!-- Favicons -->
    <link rel="shortcut icon" href="<?= PUBLIC_URL ?>/images/favicon.png">
    <link rel="apple-touch-icon" href="<?= PUBLIC_URL ?>/images/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?= PUBLIC_URL ?>/images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?= PUBLIC_URL ?>/images/apple-touch-icon-114x114.png">
    <!-- Online Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,700&subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700" rel="stylesheet">
    <!-- Vender -->
    <link href="<?= PUBLIC_URL ?>/css/font-awesome.min.css" rel="stylesheet" />
    <link href="<?= PUBLIC_URL ?>/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?= PUBLIC_URL ?>/css/normalize.min.css" rel="stylesheet" />
    <link href="<?= PUBLIC_URL ?>/css/owl.carousel.min.css" rel="stylesheet" />
    <!-- Main CSS (SCSS Compile) -->
    <link href="<?= PUBLIC_URL ?>/css/main.css" rel="stylesheet" />
    <!-- JavaScripts -->
    <!--<script src="<?= PUBLIC_URL ?>/js/modernizr.js"></script>-->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <!--preload-->
    <div class="loader" id="page-loader">
        <div class="loading-wrapper">
        </div>
    </div>
    
    <?php include_once 'menu.inc.php'; ?>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    