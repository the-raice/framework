<?php

/**
 * The Raice Framework.
 *
 * @link 
 * @copyright Copyright (c) 2017 The Raice Framework
 * @license 
 */

namespace Raice;

class Database 
{
	
	use traits\Singleton;
	
	protected $dbh;

	protected function __construct ()
	{
        
        require __DIR__ . '/../../../../protected/config/database.php';
        
		try {
			
			$this->dbh = new \PDO('mysql:host='  . $database['host'] . ';dbname='  . $database['name'], $database['user'], $database['password']);
			
		} catch ( \PDOException $e ) {
			
			throw new \Exception( $e->getMessage() );
			
		}
		
	}
	
	public function query( $sql, array $data = [] )
	{
		
		$sth = $this->dbh->prepare($sql);
		
		$result = $sth->execute($data);

		if ( $result ) {
			
			return $sth->fetchAll();
			
		} else {
			
			throw new \Exception('SQL-error!');
			
		}
		
    }
    
}

