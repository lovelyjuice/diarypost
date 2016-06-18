<?php
	require_once('config.php');
	if(! ($con = mysql_connect(HOST,USERNAME,PASSWORD))) echo mysql_error();
	if(! mysql_select_db('diary')) echo mysql_error();
	if(! mysql_qurey('set names utf8')) echo mysql_error();
?>
