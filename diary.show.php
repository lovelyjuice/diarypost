<?php
	require_once('../connect.php');
	if(!empty($_GET['id']))
	{
		$id = $_GET['id'];
		$sql = "select from diary where id=$id";
		$query = mysql_query($sql);
		if(!empty($query))
		{
			$title = $query['title'];
			$author = $query['author'];
			$content = $query['content'];
		}
		else echo "<script>alert('No such diary!!');window.location='diary.list.php';</script>";
	}
	else  echo "<script>alert('id cannot be NULL');window.location='diary.list.php';</script>";
?>


<html http-equiv="Content-Type" content="text/html; charset=utf-8">
	<head>
		<title>Show diary</title>
	</head>
	<body>
		<form>
			<div>
				<td>Title</td>
				<br>
				<td><?php echo $title;?></td>
				<br>
				<td>Author</td>
				<br>
				<td><?php echo $author;?></td>
				<br>
				<td>Content</td>
				<br>
				<textarea name="content" cols="60" rows="10" readonly="true"></textarea>
				<br>
				<td><a href="diary.list.php">Return</a></td>
			</div>
		</form>
	</body>
</html>

