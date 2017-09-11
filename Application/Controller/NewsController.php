<?php
namespace Application\Controller;

class NewsController extends \Core\Controller\AppController
{
    public function index() 
    {
        $this->render('news/index',[
            "titre"     => "Webforce3 - Lyon !",
            "accroche"  => "Partez-tous !"
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

