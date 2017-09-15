<?php

namespace Application\Model\Traits;

use Application\Model\Helper;

/**
 * Les traits sont un mécanisme de réutilisation de code dans un langage 
 * à héritage simple tel que PHP.  Un trait tente de réduire certaines
 * limites de l'héritage simple, en autorisant le développeur à réutiliser
 * un certain nombre de méthodes dans des classes indépendantes.
 * 
 * La sémantique entre les classes et les traits réduit la complexité
 * et évite les problèmes typiques de l'héritage multiple.
 * 
 * Un trait est semblable à une classe, mais il ne sert qu'à grouper
 * des fonctionnalités d'une manière interessante.
 * 
 * Il n'est pas possible d'instancier un Trait en lui-même.
 * C'est un ajout à l'héritage tradionnelle, qui autorise l'utilisation
 * de méthode de classe sans besoin d'héritage.
 */

trait Shortcut {
    
    /**
     * Créer un SLUG à partir du Titre d'un Article
     */
    public function generateSlug($text) {
        return Helper::generateSlug($text);
    }
    
}

















