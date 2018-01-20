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

<?
$return=array();
$return['error'] = "false";
$return['confirm']="false";
$return['message']="";

if($_POST['bool']=="true")
{
	$name = $_POST['name'];
	$difficulty = $_POST['difficulty'];
	$score = $_POST['score'];
	$query_insert="INSERT INTO leaderboard (name, score, difficulty) VALUES ('$name', '$score', '$difficulty')";
	$result = mysql_query($query_insert,$db);
	$return['confirm']="true";
	$return['message']="The score has been submitted!";
}
?>

<?echo json_encode($return);
mysql_close($db);?>
