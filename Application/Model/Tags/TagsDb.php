<?php
namespace Application\Model\Tags;

use Core\Model\DbTable;

class TagsDb extends DbTable
{
    protected $_table       =   'tags';
    protected $_primary     =   'IDTAGS';
    protected $_classToMap  =   __NAMESPACE__.'\\Tags';
}

