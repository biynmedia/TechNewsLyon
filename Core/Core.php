<?php

namespace Core;

class Core {
    
    public function __construct($params)
    {
        #print_r($params);
        if(empty($params)) {
            $params['controller'] = 'news';
            $params['action'] = 'index';
        }        
        
        # Récupération des paramètres
        $controller = 'Application\Controller\\'.ucfirst($params['controller']).'Controller';
        $action     = $params['action'];
        
        # On Vérifie si le fichier du controleur existe avant de l'instancier.
        if( file_exists( RACINE_SITE.'\\'.$controller.'.php' ) ) {
            
            $obj = new $controller;
            
            # Si la méthode existe dans mon controleur, alors je peux l'executer
            if( method_exists($obj, $action) ) {
                $obj->$action();
            } else {
                echo "<h1>Erreur 404 - Page Introuvable</h1>
                <h3>Aucune vue correspondante.</h3>";
            }
            
        } else {
            echo "<h1>Erreur 404 - Page Introuvable</h1>
                <h3>Ce controleur n'existe pas.</h3>";
        }
        
        
        
        #if($controller == "news" && $action == "index") {
        #    echo '<h1>JE SUIS LA PAGE ACCUEIL</h1>';
        #}
        
    }
    
}












