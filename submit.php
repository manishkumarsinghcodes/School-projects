<?php
$sname=$_POST['sname'];
$fname=$_POST['fname'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'db2');
$q="insert into student(sname,fname)values('$sname','$fname')";
$i=mysqli_query($con,$q);
echo $i;
mysqli_close($con);
?>
<html>
	<h1>you are successfully registered</h1>
</html>