<?php
	require_once('../connect.php');
	if(!empty($_POST['title']))
	{
		$title = $_POST['title'];
		$content = $_POST['content'];
		$author = $_POST['author'];
		$dateline = time();
		$insertsql = "insert_into_article(title,author,content,dateline) values('$title','$author','$content',$dateline)";
		$stat = mysql_query($insertsql);
		if($stat = 1) echo "<script>alert('Post successfully!!');window.location='diary.add.php';</script>";
		else echo "<script>alert('Post failed!!');window.location='diary.add.php';</script>";
	}
	else echo "<script>alert('Title cannot be NULL!!');window.location='diary.add.php';</script>";
?>
