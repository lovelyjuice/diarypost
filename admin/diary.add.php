<html http-equiv="Content-Type" content="text/html; charset=utf-8">
	<head>
		<title>New diary</title>
		<style type="text/css"></style>
	</head>
	<body>
		<form method="POST" action="diary.add.handle.php">
			<div>
				<td>Title</td>
				<br>
				<input name="title" cols="20" rows="1"></input>
				<br>
				<td>Author</td>
				<br>
				<input name="author" cols="20" rows="1"></input>
				<br>
				<td>Content</td>
				<br>
				<textarea name="content" cols="60" rows="10"></textarea>
				<br>
				<input type="submit" value="Submit!!" />
				<br>
				<td>Post diary</td>
				<br>
				<a href="diary.manage.php">Manage diary</a>
			</div>
		</form>
	</body>
</html>

