<html>
<head><title>Retrive form</title>
</head>
<body bgcolor="#151515">
<center>
<?php
include_once'conn.php';
$sql="SELECT * FROM reg_emply";
$result=mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)>0)
{
?>

<br><br>
<table border="2">

<tr style="color : white">
<th>ID</th>
<th>Name</th>
<th>Password</th>
<th>Email</th>
<th>Phonenumber</th>
<th>Work</th>
</tr>
<?php
$i=0;
while($row=mysqli_fetch_assoc($result))
{
?>
<tr style="color : red">
<td><?php echo$row["ID"]; ?></td>
<td><?php echo$row["Name"]; ?></td>
<td><?php echo $row["Password"]; ?></td>
<td><?php echo $row["Email"]; ?></td>
<td><?php echo $row["Phone"]; ?></td>
<td><?php echo $row["Work"]; ?></td>
</tr>

<?php
$i++;
}
?>

</table>

</tr><br><br><br>
<form style="color : cyan" method="post" action="empdelete2.php">
Enter the ID to Delete :&nbsp&nbsp
<input type="text" name="id">
<br><br><br>
<input type="submit" name="Submit" value="SUBMIT">
</form>

<?php
}
else
{
echo"No result found";
}
mysqli_close($conn);
?>
</center>
</body>
</html>


