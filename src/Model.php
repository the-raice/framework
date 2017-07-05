<?php

/**
 * The Raice Framework.
 *
 * @link 
 * @copyright Copyright (c) 2017 The Raice Framework
 * @license 
 */

namespace Raice;

class Model
{
    
    /**
     * The Database object
     *
     * @var object
     */
    protected $database;
    
    public function __construct ()
    {
        
        $this->database = new Database();
        
    }
    
}
