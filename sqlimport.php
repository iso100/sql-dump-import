<?php

	/* ********************************************
	*  HTML page setup
	*  *******************************************/
	$header = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
			<html xmlns="http://www.w3.org/1999/xhtml">
			<head>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<title>Import| Pitney Bowes Software</title>
			<meta name="author" content="Pitney Bowes Software Web Team" />
			<meta name="title" content="PB Import" />
			<meta name="description" content="PB Import" />
			</head>';
			
	$body = '<body>
				<div>
					<h3>Import Status</h3>';
		
	$footer = '</div></body></html>';

	/* *******************************************
	*	Include the configuration file
	* *******************************************/
	require_once 'sqlconfig.php';

	//Initialize variables
	$sqlfile = $config['sql_file'];					// SQL File
	$hostname = $config['host_name'];				// Server Name
	$db_user = $config['database_user'];			// User Name
	$db_password = $config['database_password'];	// User Password
	$database_name = $config['database_name'];		// DBName
	
	$description = '';
	$diagnostic_info = '';
	$blnDiagnostics = FALSE;
	
	$diagmode = (isset($_REQUEST['dmode'])) ? $_REQUEST['dmode'] : 0;
	
	if($diagmode == 1)
		$blnDiagnostics = TRUE;

	/* ************************************************
	*	Connect to the mysql database
	* ************************************************/
	$link = mysql_connect($hostname, $db_user, $db_password);
	
	if (!$link) 
	{
		die($header.$body."Unable to connect to the MySQL database".$footer);
	}
	else
	{
		$blnError = FALSE;
		// Select the mySQL DB
		mysql_select_db($database_name, $link) or die("Wrong MySQL Database");
	
		$file_content = file($sqlfile);
		$query = "";
	
		foreach($file_content as $sql_line)
		{
			if(trim($sql_line) != "" && strpos($sql_line, "--") === false)
			{
				$query .= $sql_line;
				if (substr(rtrim($query), -1) == ';')
				{
					if($blnDiagnostics === false)
						$diagnostic_info .= $query.'\n';

					//echo $query;        //For debugging purposes
					$result = mysql_query($query)or die($header.$body.mysql_error().'. The import has been terminated and did not complete the process.'.$footer);
					$query = "";
				}
			}
		 }
		$description = "File ".$sqlfile." successfully imported into the ".$database_name." database.";
		
		if($blnDiagnostics === false)
			$description .= '<h3>'.$diagnostic_info.'</h3>';
			
		mysql_close();
	}
	
	echo $header.$body.$description.$footer;
?>
