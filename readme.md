#Laravel 5 Database Actions


Laravel 5 Database Actions actions is a package created to gives to laravel 
the power of manipulates the database ddl functions. 
Until the moment this package has support only for Mysql


##Database Actions


#####CREATE DATABASE '$databaseName'
```php
Database::create($databaseName); //Return: void
```

#####DROP DATABASE '$databaseName'
```php
Database::drop($databaseName); //Return: void
```

#####mysqldump $databaseName
```php
Database::dump($databaseName); //Return: string
```

#####mysql $databaseName < $fileName
```php
Database::restoreFrom($fileName, $databaseName); //Return: void
```

##Table Actions

#####SHOW TABLES
```php
Table::show(); //Return: array. 
```

#####SHOW TABLES
```php
Table::desc($tableName); //Return: Illuminate\Support\Collection.
```

#####"mysqldump $tableName"
```php
Table::dump($TableName); //Return: string.
```

#####"mysql $tableName < $fileName" 
```php
Table::restoreFrom($fileName, $databaseName); //Return: boolean.
```

##Column Actions

You should pass the column name in the constructor method,
to obtain the attributes of the column

```php
Column::__construct($columnName)
```

#####Get the type of column
```php
Column::type() //Return: string
```

#####Get the size of column
```php
Column::size() //Return: int
```

#####Retrieve if the column in null or not
```php
Column::isNull() //Return: boolean.
```

#####Retrieve if is a primaryKey or not
```php
Column::isPrimaryKey(); //Return: boolean.
```

#####Retrieve if is a uniqueKey or not
```php
Column::isUniqueKey(); //Return: boolean
```

#####Retrieve if is an auto_increment field or not
```php
Column::isAutoIncrement(); //Return: boolean
```

#####Retrieve the default value of the column
```php
Column::default(); //Return: string
```
