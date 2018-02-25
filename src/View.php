<?php

/**
 * The Raice Framework.
 *
 * @link 
 * @copyright Copyright (c) 2017 The Raice Framework
 * @license 
 */

namespace Raice;

class View
{
	
    public function __construct ( $className, $title )
    {
		
        $this->render( $className, $title );
        
    }
    
    public function render ( $className, $title )
    {
        
        $className = str_replace('\\', '/', $className);
        $class = strtolower($className);
        require __DIR__ . '/../../../../protected/views/Header.php';
        require __DIR__ . '/../../../../protected/views/' . $className . '.php';
        require __DIR__ . '/../../../../protected/views/Footer.php';
        
    }
    
}
