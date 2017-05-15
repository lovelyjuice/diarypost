<?php
	require_once('../connect.php');
	if(!empty($_POST['title']))
	{
		$title = $_POST['title'];
		$content = $_POST['content'];
		$author = $_POST['author'];
		$dateline = time();
        $insertsql = "insert into diary(title,author,content,dateline) values('$title','$author','$content',now())";
        echo $insertsql;
		$stat = mysql_query($insertsql);
        if ($stat == true) echo "<script>alert('Post successfully!!');\n//window.location='diary.add.php';\n</script>";
		else echo "<script>alert('Post failed!!');window.location='diary.add.php';</script>";
	}
	else echo "<script>alert('Title cannot be NULL!!');window.location='diary.add.php';</script>";
?>
