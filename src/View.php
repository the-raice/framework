<?php

namespace Raice;

class View extends Application
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
