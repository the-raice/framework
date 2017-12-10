<?php

/**
 * The Raice Framework.
 *
 * @link 
 * @copyright Copyright (c) 2017 The Raice Framework
 * @license 
 */

namespace Raice\traits;

trait Singleton
{

  protected static $instance;
  
  protected function __construct ()
  {
  
  }
  
  public static function instance ()
  {
    
    if ( static::$instance === null ) {
      
      static::$instance = new static;
    
    }
    
    return static::$instance;
  
  }

}
