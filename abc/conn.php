<?php
$servername='localhost';
$username='root';
$password='';
$dbname='abc';

$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
die('could not connect my sql:' .mysql_error());
}
else
{
echo "connected";
}
?>