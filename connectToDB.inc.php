<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">	
	<meta name="description" content="">
	<meta name="author" content="Sang Jun">
	<title>Connecting to Database</title>
</head>
<body>
<?php
// database configurations
$db_servername = "localhost";
$db_username = "bak5b557";
$db_password = "bak5b557_318";
$db_databasename = "actonhig_bak5b557";

//************************************************************************
// Connect to MySQL Database
//************************************************************************
$db = mysql_connect($db_servername,$db_username,$db_password);
if (!$db) {
    die('Could not connect to database: ' . mysql_error());
} else {
    mysql_select_db($db_databasename,$db);
   
}
?>
</body>
</html>