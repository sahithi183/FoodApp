<?php
$Username = $_GET['Username'];
$Password = $_GET['Password'];
$ConfirmPassword = $_GET['ConfirmPassword'];
$Email = $_GET['Email'];



$connect=mysqli_connect('localhost','root','123456789','userdetails');
if(mysqli_connect_errno($connect)){
echo 'Failed to connect to database: '.mysqli_connect_error();
}
else{
echo 'Connected Successfully!!';}
?>