<!doctype html>
<html>

<head>
    <title>Student Entry Result</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div>
<?php
$id = $_REQUEST['id'];
$name = $_REQUEST['name'];

$connect = mysql_connect('localhost','root','');
$db = mysql_select_db('ftfl',$connect);

$query = "select count(*) from students where id = '$id' or name = '$name'";
$result = mysql_query($query);
if($result==0)
{
    $query = "insert into students values ('$id','$name')";
    $result = mysql_query($query);
    if($result)
    {
        echo "Data inserted, thank you";
    }
}
else
{
    echo "Data already exists";
}

?>
</div>
</body>
</html>
