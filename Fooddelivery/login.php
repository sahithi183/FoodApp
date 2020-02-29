<?php
$connect=mysqli_connect('localhost','root','','userdetails');


echo "</br>";
$un =$_POST['username'];
$pwd =$_POST['Password'];
$ConfirmPassword = $_POST['ConfirmPassword'];
$Email = $_POST['Email'];
$query=mysqli_query($connect,"select * from register where username='".$Email."' and password='".$pwd."'");
$nr=mysqli_fetch_row($query);
if($nr)
echo "Welcome '$Email'";
else
echo "Invalid Credentials";
?>

