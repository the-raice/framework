<?php

/**
 * The Raice Framework.
 *
 * @link 
 * @copyright Copyright (c) 2017 The Raice Framework
 * @license 
 */

namespace Raice;

class Database extends \PDO
{
    
    public function __construct ()
    {
        
        parent::__construct('mysql:host=localhost;dbname=test', 'root', '');
        
    }
    
}
