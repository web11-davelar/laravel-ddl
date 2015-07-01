<?php namespace Lanch\Database;

use DB, Exception;

class Table {
	
	public function __construct()
	{
		if(config('database.default') != 'mysql') {
			throw new Exception('Default database is not mysql');
		}
	}

	public function all()
	{
		$databaseName = config('database.connections.mysql.database');
        $tables = (DB::select("SELECT TABLE_NAME FROM information_schema.tables WHERE table_schema='$databaseName' AND TABLE_NAME <> 'migrations'"));

        foreach($tables as $table) {
            $output[] = $table->TABLE_NAME;
        }
        return $output;
	}
}

Database::create($databaseName);
Database::drop($databaseName);
Database::dump($databaseName);
Database::restoreFrom($fileName, $databaseName);

Table::show(); //return array
Table::desc($tableName); //return Column Collection
Table::dump($TableName); //string
Table::restoreFrom($fileName, $databaseName); //boolean

Column::__construct($columnName) // return void
Column::type(); // return string
Column::size(); // return int
Column::isNull() // boolean
Column::isPrimaryKey() // boolean
Column::isUniqueKey() // boolean
Column::isAutoIncrement() // boolean
Column::default() // string





