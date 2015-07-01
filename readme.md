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