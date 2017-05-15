<?php
	require_once('connect.php');
	$sql = "select * from diary order by dateline desc";
	$query = mysql_query($sql);
$data = array();
	if($query&&mysql_num_rows($query))
	{
		while($row = mysql_fetch_assoc($query)) $data[] = $row;
	}
?>

<html http-equiv="Content-Type" content="text/html; charset=utf-8">
	<head>
		<title>Diary list</title>
	</head>
	<body>
		<table>
			<form method="GET">
				<div>
					<tr>
						<td width="100">Title</td>
						<td width="70">Author</td>
						<td width="70">Timestamp</td>
						<td width="50">Operation</td>
					</tr>
					<tr>
					<?php
                    if (!empty($data)) foreach ($data as $value)
                    {
					?>
					<tr>
						<td><?php echo $value['title'];?></td>
						<td><?php echo $value['author'];?></td>
						<td><?php echo $value['dateline'];?></td>
						<td><a href="diary.show.php?id=<?php echo $value['id'];?>">Show</a></td>
					</tr>
                    <?php } ?>
				</div>
			</form>
		</table>
	</body>
</html>
