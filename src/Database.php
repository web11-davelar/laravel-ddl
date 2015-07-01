<?php 

class Database {

	public function create($databaseName)
	{
		return 'creating the database';
	}

	public function drop($databaseName)
	{
		return 'dropping the database';
	}

	public function dump($databaseName)
	{
		return 'dumping the database';
	}

	public function restoreFrom($fileName, $databaseName)
	{
		return "Restoring database from file $fileName";
	}
	
}