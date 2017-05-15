<?php
require_once('./connect.php');
$title = '';
$content = '';
$author = '';
if (!empty($_GET['id']))
{
    $id = $_GET['id'];
    $sql = "select * from diary where id=$id";
    $query = mysql_query($sql);

    if (mysql_num_rows($query) != 0)
    {
        $item = mysql_fetch_assoc($query);
        $title = $item['title'];
        $author = $item['author'];
        $content = $item['content'];

    }
    else echo "<script>alert('No such diary!!');window.location='diary.list.php';</script>";
}
else  echo "<script>alert('id cannot be NULL');window.location='diary.list.php';</script>";
?>


<html content="text/html;charset=utf-8">
<head>
    <title>Show diary</title>
</head>
<body>
<form>
    <div>
        <td>Title</td>
        <br>
        <td><?php echo $title; ?></td>
        <br>
        <td>Author</td>
        <br>
        <td><?php echo $author; ?></td>
        <br>
        <td>Content</td>
        <br>
        <textarea name="content" cols="60" rows="10" readonly="true"><?php echo $content ?></textarea>
        <br>
        <td><a href="diary.list.php">·µ»Ø</a></td>
    </div>
</form>
</body>
</html>

