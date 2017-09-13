<?php
namespace Core\Controller;

class AppController
{
    
    private $_viewparams;
    
    /**
     * Permet de générer l'affichage de la vue passée en paramètre.
     * @param String $view Vue à afficher
     * @param Array $viewparams Données à passer à la vue
     */
    protected function render($view, $viewparams = '') {
        
        # Récupération et Affectation des Paramètres de la Vue
        $this->_viewparams = $viewparams;
        
        # Affichage de l'En-tete
        require HEADER_SITE;
        
            # Inclusion de la Vue
            include_once VIEW_SITE.'/'.$view.'.php';
            
        # Affichage du Pied de Page
        require FOOTER_SITE;
        
    }
    
    /**
     * Renvoi le tableau de paramètres de la vue.
     * @return Array
     */
    public function getParams() {
        return $this->_viewparams;
    }
    
    /**
     * Permet le débuggage des paramètres de la vue.
     */
    public function debug() {
        echo '<pre>';
            print_r($this->_viewparams);
        echo '</pre>';
    }
    
    /**
     * Vérifie l'existance de valeur dans $_GET['action'];
     */
    public function getAction() {
        if(empty($_GET['action'])) {
            return 'accueil';
        } 
        return $_GET['action'];
    }
    
}
















