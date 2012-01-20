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
$config['sql_file']	= "";

/*
|--------------------------------------------------------------------------
| Database hostname
|--------------------------------------------------------------------------
|
| Typically this will be the hostname for the database server: ie localhost.
|
*/
$config['host_name'] = "";

/*
|--------------------------------------------------------------------------
| Database Name
|--------------------------------------------------------------------------
|
| Name of the target database.
|
*/
$config['database_name'] = "";

/*
|--------------------------------------------------------------------------
| Database User
|--------------------------------------------------------------------------
|
| User name used to connect to the database server.
|
*/
$config['database_user'] = "";

/*
|--------------------------------------------------------------------------
| Database Password
|--------------------------------------------------------------------------
|
| Password used to connect to the database server.
|
*/
$config['database_password'] = "";


?>