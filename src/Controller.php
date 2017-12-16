<?php

/**
 * The Raice Framework.
 *
 * @link 
 * @copyright Copyright (c) 2017 The Raice Framework
 * @license 
 */

namespace Raice;

class Controller
{
    
    /**
     * The View object
     *
     * @var object
     */
    public $view;
    
    /**
     * The name of class
     *
     * @var string
     */
    public $className;
	
    public function getView ( $className )
    {
        
        $this->view = new View( $className );
        
    }
    
    public function getName()
    {
        
        $this->className = substr( strrchr( static::class, "\\" ), 1);    
		
        return $this->className;
        
    }
    
}
