<?php

namespace Raice;

class Database extends \PDO
{
    
    public function __construct ()
    {
        
        parent::__construct('mysql:host=localhost;dbname=test', 'root', '');
        
    }
    
}
