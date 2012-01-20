<?php if ( ! defined('SQLIMPORT')) exit('No direct script access allowed');

$config = '';
/*
|--------------------------------------------------------------------------
| SQL file
|--------------------------------------------------------------------------
|
| Path and file name of the SQL backup/dump file. Typically this will be the
| file system path:
|
|	D://wamp/www/filedirectory/filename.sql
|
*/
$config['sql_file']	= "D://wamp/www/devee2/scripts/php/pbdev20120117.sql";
//$config['sql_file'] = "D://wamp/www/devee2/scripts/php/local_vollyedu.sql";
//$config['sql_file']	= "D://wamp/www/devee2/scripts/php/dummy.sql";

/*
|--------------------------------------------------------------------------
| Database hostname
|--------------------------------------------------------------------------
|
| Typically this will be the hostname for the database server: ie localhost.
|
*/
$config['host_name'] = "localhost";

/*
|--------------------------------------------------------------------------
| Database Name
|--------------------------------------------------------------------------
|
| Name of the target database.
|
*/
$config['database_name'] = "dummy";

/*
|--------------------------------------------------------------------------
| Database User
|--------------------------------------------------------------------------
|
| User name used to connect to the database server.
|
*/
$config['database_user'] = "root";

/*
|--------------------------------------------------------------------------
| Database Password
|--------------------------------------------------------------------------
|
| Password used to connect to the database server.
|
*/
$config['database_password'] = "z9dragon";


?>