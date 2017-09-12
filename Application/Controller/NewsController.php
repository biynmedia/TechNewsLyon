<?php
namespace Application\Controller;

use Application\Model\Categorie\CategorieDb;

// use Core\Controller\AppController;

class NewsController extends \Core\Controller\AppController
{
    public function index() 
    {
        # Connexion à la BDD
        $CategorieDB = new CategorieDb();
        
        # Récupération des Catégories
        $categories = $CategorieDB->fetchAll();
        
        # Affichage dans la vue
        $this->render('news/index',[
            'categories' => $categories
        ]);
    }
    
    public function categorie()
    {
        $this->render('news/categorie');
    }
    
    public function article()
    {
        $this->render('news/article');
    }
}

