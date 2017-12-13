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
    protected static $database;
    
    public function __construct ()
    {
        
        
        
    }
    
    public function getAll ( )
    {
        
        $database = Database::instance();
        $sql = "SELECT * FROM " . static::TABLE;
        $result = $database->query($sql);
        
        return $result;
        
    }    
    
    public function getOneById ( $id )
    {
        
        $database = Database::instance();
        $sql = "SELECT * FROM " . static::TABLE . " WHERE id=:id";
        $result = $database->query( $sql, ['id' => $id] );
        return $result;
        
    }
    
    public function getOneByField ( $value, $field )
    {

        $database = Database::instance();
        $sql = "SELECT * FROM " . static::TABLE . " WHERE :field=:value";
        $result = $database->query( $sql, ['field' => $field, 'value' => $value] );
        
        return $result;
        
    }
}
