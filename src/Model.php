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
    
    public static function getAll ( )
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
        $sql = "SELECT * FROM " . static::TABLE . " WHERE $field=:value";
        $result = $database->query( $sql, ['value' => $value] );
        
        return $result;
        
    }
    
    public function getOneByTwoFields ( $value1, $field1, $value2, $field2 )
    {

        $database = Database::instance();
        $sql = "SELECT * FROM " . static::TABLE . " WHERE $field1=:value1 AND $field2=:value2";
        
        $result = $database->query( $sql, [
                                            'value1' => $value1, 
                                            'value2' => $value2
                                           ] 
                                   );
        
        return $result;
        
    }
    
    public function update ( $query, $value, $field ) {
        
        $database = Database::instance();
        $sql = "UPDATE " . static::TABLE . " SET $query WHERE $field=:value";
        
        $result = $database->query( $sql, ['value' => $value]);
        
    }
    
    public function insert ( $values )
    {
        
        $database = Database::instance();
        $sql = "INSERT INTO " . static::TABLE . " VALUES($values)";
        $result = $database->query( $sql );
        
    }
    
    public function delete ( $value, $field )
    {
        
        $database = Database::instance();
        $sql = "DELETE FROM " . static::TABLE . " WHERE $field=:value";
        $result = $database->query( $sql, ['value' => $value] );
        
    }
    
}

