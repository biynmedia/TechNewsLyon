<?php
namespace Application\Controller;

use Application\Model\Article\ArticleDb;

// use Core\Controller\AppController;

class NewsController extends \Core\Controller\AppController
{
    public function index() 
    {
        
        # Connexion à la BDD
        $ArticleDb = new ArticleDb();
        
        # Récupération des Articles
        $articles = $ArticleDb->fetchAll();
        
        # Récupération des Articles en Spotlight
        $where      = 'SPOTLIGHTARTICLE = 1';
        $spotlight  = $ArticleDb->fetchAll($where);
        
        # Affichage dans la vue
        $this->render('news/index',[
            'articles'  => $articles,
            'spotlight' => $spotlight
        ]);
    }
    
    public function business() {
        
        # Connexion à la BDD
        $ArticleDb = new ArticleDb;
        
        # Récupération des Articles
        $articles = $ArticleDb->fetchAll('IDCATEGORIE = 2');
        
        # Transmission à la Vue
        $this->render('news/categorie',['articles'=>$articles]);
        
    }
    
    public function computing() {
    
        # Connexion à la BDD
        $ArticleDb = new ArticleDb;
    
        # Récupération des Articles
        $articles = $ArticleDb->fetchAll('IDCATEGORIE = 3');
    
        # Transmission à la Vue
        $this->render('news/categorie',['articles'=>$articles]);
    
    }
    
    public function tech() {
    
        # Connexion à la BDD
        $ArticleDb = new ArticleDb;
    
        # Récupération des Articles
        $articles = $ArticleDb->fetchAll('IDCATEGORIE = 4');
    
        # Transmission à la Vue
        $this->render('news/categorie',['articles'=>$articles]);
    
    }
    
    public function article()
    {
        $this->render('news/article');
    }
}












