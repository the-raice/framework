<?php

/**
 * The Raice Framework.
 *
 * @link 
 * @copyright Copyright (c) 2017 The Raice Framework
 * @license 
 */

namespace Raice;

class Session
{
    
    public static function init ()
    {
        
        session_start();
        
    }
        
    public static function set ( $key, $value )
    {
        
        return $_SESSION[$key] = $value;
        
    }
    
    public static function get ( $key )
    {
        
        return $_SESSION[$key];
        
    }
    
    public static function destroy ()
    {
        
        unset( $_SESSION );
        
        session_destroy();
        
    }
    
}
