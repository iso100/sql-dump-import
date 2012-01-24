SQL DUMP IMPORT
===============

SQL Dump Import was created to allow easy importing of SQL dump files onto web servers. Once configured (see below for details) hitting the SQLImport.php file will read from the specified SQL dump file and execute all commands found within.

SQL Import Configuration
------------------------

The sqlconfig.php file contains the information needed to specify the sql import file and the authentication credentials for connection to the target database. The configuration parameters are:

### $config[] Parameters ###

* $config['sql_file'] = "D://wamp/www/filedirectory/sqlmysqlfile.sql"; (Enter the full system path and file name of the MySQL export file. A website url could be used but is not recommended for security purposes.)
* `$config['host_name'] = "www.example.com";` (Enter the name of the host server that the database resides on.)
* `$config['database_name'] = "mysql2";` (Enter the name of the MySQL database that will receive the imported data.)
* `$config['database_user'] = "sqluser";` (Enter the account name used for connection to the database listed in the config[database_name] field.)
* `$config['database_password'] = "sqluserpassword";` (Enter the password for the account listed in the config[database_user] field.)

SQL Import Script
-----------------

The sqlimport.php script performs the data import into the specified database and upon script completion displays a message indicating the status of process. If a major failure occurs during the process the script will terminate at the point of failure. For debugging purposes an optional querystring parameter is available. If using the parameter,queries executed by the script will be displayed in conjunction with the process status.

### Debug Parameter ###

* `diagmode=1` Example - http://www.example.com/test/sqlimport.php?diagmode=1
