<?php
namespace Application\Model\Article;

use Application\Model\Categorie\CategorieDb;
use Application\Model\Auteur\AuteurDb;
use Application\Model\Traits\Shortcut;
use Application\Model\Helper;

class Article
{
    # Utilisation du Trait Shortcut, à ne pas confondre avec le use
    # pour le namespace.
    use Shortcut;
    
    private $IDARTICLE,
            $IDAUTEUR,
            $IDCATEGORIE,
            $TITREARTICLE,
            $CONTENUARTICLE,
            $FEATUREDIMAGEARTICLE,
            $SPECIALARTICLE,
            $SPOTLIGHTARTICLE,
            $DATECREATIONARTICLE,
            $CategorieObj,
            $AuteurObj;
    
    public function __construct() {
        
        # L'appel au constructeur se fait de façon automatique
        # par la classe PDO.
        
        # A chaque "construction", nous allons récupérer des
        # informations.
        
        $CategorieDb = new CategorieDb();
        $this->CategorieObj = $CategorieDb->fetchOne($this->IDCATEGORIE);
        
        $AuteurDb = new AuteurDb();
        $this->AuteurObj = $AuteurDb->fetchOne($this->IDAUTEUR);        
    }
    
    /**
     * @return the $IDARTICLE
     */
    public function getIDARTICLE()
    {
        return $this->IDARTICLE;
    }

    /**
     * @return the $IDAUTEUR
     */
    public function getIDAUTEUR()
    {
        return $this->IDAUTEUR;
    }

    /**
     * @return the $IDCATEGORIE
     */
    public function getIDCATEGORIE()
    {
        return $this->IDCATEGORIE;
    }

    /**
     * @return the $TITREARTICLE
     */
    public function getTITREARTICLE()
    {
        return $this->TITREARTICLE;
    }

    /**
     * @return the $CONTENUARTICLE
     */
    public function getCONTENUARTICLE()
    {
        return $this->CONTENUARTICLE;
    }

    /**
     * @return the $FEATUREDIMAGEARTICLE
     */
    public function getFEATUREDIMAGEARTICLE()
    {
        return $this->FEATUREDIMAGEARTICLE;
    }

    /**
     * @return the $SPECIALARTICLE
     */
    public function getSPECIALARTICLE()
    {
        return $this->SPECIALARTICLE;
    }

    /**
     * @return the $SPOTLIGHTARTICLE
     */
    public function getSPOTLIGHTARTICLE()
    {
        return $this->SPOTLIGHTARTICLE;
    }

    /**
     * @return the $DATECREATIONARTICLE
     */
    public function getDATECREATIONARTICLE()
    {
        return $this->DATECREATIONARTICLE;
    }
    
    /**
     * @return the $CategorieObj
     */
    public function getCategorieObj()
    {
        return $this->CategorieObj;
    }

    /**
     * @return the $AuteurObj
     */
    public function getAuteurObj()
    {
        return $this->AuteurObj;
    }    
    
    /**
     * Retourne une Accorche de 170 caractères...
     */
    public function getAccroche() {
        
        # Supprimer toutes les balises HTML
        $string = strip_tags($this->CONTENUARTICLE);
        
        # Si ma chaine de caractère est supérieur à 170, je poursuis
        # Sinon c'est inutile
        if(strlen($string) > 170) {
            
            # Je coupe ma chaine à 170.
            $stringCut = substr($string, 0, 170);
            
            # Je m'assure que je ne coupe pas de mot !
            $string = substr($stringCut, 0, strrpos($stringCut, ' '));
            
        }
        
        return $string;
        
    }
    
    /**
     * Génère une URL à partir du Titre de l'Article
     * @return string URL vers l'Article
     */
    public function generateUrl() {
        
        # public/article/[:idarticle]-[:slug].html
        # ou : idarticle = $_GET['idarticle'];
        # PUBLIC_URL.'article/'.$this->IDARTICLE.'-'.
        #    $this->generateSlug($this->TITREARTICLE).'.html';
        
        return Helper::generateUrl($this->IDARTICLE, $this->TITREARTICLE);
    }
    
    /**
     * Mise au Format de la Date
     * @return unknown
     */
//     public function getDateCreationArticle()
//     {
//         $strRetour=date_format(date_create($this->DATECREATIONARTICLE),"d/m/Y");
//         return $strRetour;
//     }
    
            
}















