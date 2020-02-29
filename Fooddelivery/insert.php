
<?php
$con=mysqli_connect('127.0.0.1','root','','userdetails');
if(!$con)
{
echo 'Not connected to server';
}
$Name=$_POST['username'];
$Email=$_POST['email'];

$sql="INSERT INTO register (username,Email) VALUES('$Name','$Email')";

if(!mysqli_query($con,$sql))
{
echo 'not inserted';
}
else
{
echo 'Inserted';
}
header("refresh:2;url=Register.html");
?>