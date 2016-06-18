<?php
	require_once('../connect.php');
	$sql = "select * from article order by dateline desc";
	$query = mysql_query($sql);
	if($query&&mysql_num_rows($query))
	{
		while($row = mysql_fetch_assoc($query)) $data[] = $row;
	}
	else $data = array();
?>

<html http-equiv="Content-Type" content="text/html; charset=utf-8">
	<head>
		<title>Manage diary</title>
	</head>
	<body>
		<table>
			<form method="GET">
				<div>
					<tr>
						<td width="37">ID</td>
						<td width="300">Title</td>
						<td width="70">Author</td>
						<td width="82">Operation</td>
					</tr>
					<?php
						if(!empty($data)) foreach($data as $value);
					?>
					<tr>
						<td><?php echo $value['id'];?></td>
						<td><?php echo $value['title'];?></td>
						<td><?php echo $value['author'];?></td>
						<td><a href="diary.del.handle.php?id=<?php echo $value['id'];?>">Delete</a></td>
					</tr>
				</div>
			</form>
		</table>
		<a href="diary.add.php">Post diary</a>
		<br>Manage diary</br>
	</body>
</html>
