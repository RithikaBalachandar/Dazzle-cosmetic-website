<?php
$n= $_POST['emailnews'];

$con= mysqli_connect('localhost','root','');
mysqli_select_db($con,'dazzle');
$sql= ("insert into newsletter_subscribers(emailnews)
values('$n')");
mysqli_query($con,$sql);
echo('Subscribed successfully');
include('index.html');

mysqli_close($con);

?>