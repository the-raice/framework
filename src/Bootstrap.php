<?php

/**
 * The Raice Framework.
 *
 * @link 
 * @copyright Copyright (c) 2017 The Raice Framework
 * @license 
 */

namespace Raice;

class Bootstrap
{
    
    /**
     * The URL received from the user
     *
     * @var array
     */
    protected $url;
    
    /**
     * The name of the controller from URL
     *
     * @var string
     */
    protected $controller;
    
    /**
     * The name of the method
     *
     * @var string
     */
    protected $method;
    
    /**
     * The argument of the method
     *
     * @var string
     */
    protected $argument;
    
    /**
     * The file location
     *
     * @var string
     */
    protected $file;
    
    /**
     * The Bootstrap object
     *
     * @var object
     */
    protected $bootstrap;
    
    /**
     * The full name of the controller
     *
     * @var string
     */
    protected $controllerName;
    
    /**
     * The path to 
     *
     *
     */
    protected $methodName;
    
    public function __construct ( )
    {

        $this->url = explode('/', $_SERVER['REQUEST_URI']);
        
        $this->controller = ucfirst($this->url[1]);
        $this->method = ucfirst($this->url[2]);
        $this->argument = $this->url[3];
        
        if ( empty( $this->controller ) ) {
            
            $this->controllerName = '\Controllers\Welcome';
            
        } else {
            
            $this->controllerName = '\Controllers\\' . $this->controller;
            
        }

        if ( !empty( $this->method ) ) {
            
            $this->methodName = $this->controllerName . '\\' . $this->method ;
            
            if ( class_exists( $this->methodName ) ) {
                
                $this->bootstrap = new $this->methodName;
                
            } 
    
            if ( method_exists( $this->controllerName, $this->method ) ) {
                
                $this->bootstrap = new $this->controllerName;
                
                if ( !empty( $this->argument ) ) {
                    
                   $this->bootstrap->{$this->method}( $this->argument );
                    
                } else {

                  $this->bootstrap->{$this->method}();
                    
                }
                
            }
          
        } else {
            
            $this->bootstrap = new $this->controllerName;
            
        }
        
	}

}
