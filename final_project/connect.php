<?php
$a= $_POST['name'];
$b= $_POST['email'];
$c= $_POST['phone'];
$d= $_POST['Message'];

$con= mysqli_connect('localhost','root','');
mysqli_select_db($con,'dazzle');
$sql= ("insert into contact(name,email,phone,Message)
values('$a','$b','$c','$d')");
mysqli_query($con,$sql);
echo('Message successfully sent!');
include('index.html');

mysqli_close($con);

?>