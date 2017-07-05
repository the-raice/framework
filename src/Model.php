<?php

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
