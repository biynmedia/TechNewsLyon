<?php
namespace Core\Model;

abstract class DbTable
{
    # Nom de la Table
    protected $_table;
    
    # Clé Primaire
    protected  $_primary;
    
    # Classe à Mapper
    protected $_classToMap;
    
    # Objet PDO, BDD
    private $_db;
    
    public function __construct() {
        $this->_db = DbFactory::PDOFactory();
    }
    
}









