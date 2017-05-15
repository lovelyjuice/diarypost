<?php
	require_once('config.php');
if ($con = mysql_connect(HOST, USERNAME, PASSWORD))
	{
//		if($create = mysql_query("CREATE DATABASE Diary"))
		{
			mysql_select_db("Diary",$db);
            $table = 'CREATE TABLE diary
			(
			id int NOT NULL AUTO_INCREMENT,
			title text,
			author text,
			content longtext,
			dateline timestamp
			)';
			mysql_query($table,$db);
		}
//		else echo mysql_error();
	}
	else echo mysql_error();
?>
