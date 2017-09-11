<?php

# Racine du Site Internet
define('RACINE_SITE', dirname(__FILE__, 2));

# Chemin Relatif vers le Dossier Public
define('PUBLIC_URL', '/TechNewsLyon/public/');

# En-tete du site
define('HEADER_SITE', RACINE_SITE.'/Application/Layout/header.inc.php');

# Pied de Page du site
define('FOOTER_SITE', RACINE_SITE.'/Application/Layout/footer.inc.php');

define('VIEW_SITE', RACINE_SITE.'/Application/Views');

require_once 'Autoloader.php';
Autoloader::register();














