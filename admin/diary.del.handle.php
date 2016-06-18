<?php
	require_once('../connect.php');
	if(!empty($_GET['id']))
	{
		$id = $_GET['id'];
		$delsql = "delete from diary where id=$id";
		$stat = mysql_query($delsql);
		if($stat = 1) echo "<script>alert('Delete successfully!!');window.location='diary.manage.php';</script>";
		else echo "<script>alert('Delete failed!!');window.location='diary.manage.php';</script>";
	}
	else echo "<script>alert('id cannot be NULL!!');window.location='diary.manage.php';</script>";

?>
