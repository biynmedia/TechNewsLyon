<?php
namespace Application\Model\Categorie;

use Core\Model\DbTable;

class CategorieDb extends DbTable
{
    protected $_table       =   'categorie';
    protected $_primary     =   'IDCATEGORIE';
    protected $_classToMap  =   __NAMESPACE__.'\\Categorie';
}

