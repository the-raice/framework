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
	
    public function __construct ( $className )
    {
		
        parent::__construct();
		
        $this->render( $className );
        
    }
    
    public function render ( $className )
    {
		
        require ROOT_PATH . 'protected/Views/header.php';
        require ROOT_PATH . 'protected/Views/' . $className . '/' . $className . '.php';
        require ROOT_PATH . 'protected/Views/footer.php';
        
    }
    
}
