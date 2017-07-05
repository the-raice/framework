<?php

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
     * The name of the controller
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
     * The supported extensions of files that are in public/assets
     *
     * @var array
     */
    protected $extensions = ['css', 'js'];
    
    public function __construct ( )
    {
        
        $this->url = explode('/', $_SERVER['REQUEST_URI']);
        
        foreach ( $this->extensions as $extension ) {
            
            if ( $extension == $this->url[2] ) {
                
                return require ROOT . $_SERVER['REQUEST_URI'];
                
            }
            
         }
        
        $this->controller = ucfirst($this->url[1]);
        $this->method = ucfirst($this->url[2]);
        $this->argument = $this->url[3];
        
        if ( empty( $this->controller ) ) {
            
            $this->controller = 'Controllers\Welcome';
            
        } else {
            
            $this->controller = 'Controllers\\' . $this->controller;
            
        }
            
        $this->file = ROOT_PATH . 'protected/' . $this->controller . '.php';
        
         if ( file_exists( $this->file ) ) {
            
            require $this->file;
            
        } else {
            
             throw new \Exception('The ' . $this->controller . ' doesn\'t exist!');
             return false;
           
        }
        
        $this->bootstrap = new $this->controller;
        
        if ( !empty( $this->method ) && method_exists( $this->bootstrap, $this->method ) ) {
            
            $this->bootstrap->{$this->method}();
            
        }
        
        if ( !empty( $this->argument ) && method_exists( $this->bootstrap, $this->method ) ) {
            
            $this->bootstrap->{$this->method}( $this->argument );
            
        }
        
    }
    
}
