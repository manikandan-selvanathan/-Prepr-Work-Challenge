<?php

function db_connect() {
   $dbhost = 'salt.db.elephantsql.com';
	$dbname = 'kwolrttx';
	$dbuser = 'kwolrttx';
	$dbpass = 'WfUh3iO8XHGtzJOXNHCV8U4Oqy-LCx5L';
	
	try 
	{
		$conn = new PDO("pgsql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
		$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
		$conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	} 
	catch (PDOException $e) 
	{
		echo "Error!: " . $e->getMessage() . "<br/>";
 		die();
 	}
	
	return $conn;
}
