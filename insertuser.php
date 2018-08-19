<?php

$con= mysqli_connect('localhost','root','','dbms');

$user_name=$_POST['name'];
$consumer_id=$_POST['consumer_id'];
$password=$_POST['password'];

$r=
"
INSERT INTO consumerlogin(consumer_id)
SELECT consumer_id
  FROM consumer
 WHERE consumer_id='$consumer_id';
";
 
if(mysqli_query($con,$r));
echo "sucessful 1st query";


$s="
UPDATE consumerlogin
SET username='$user_name',password=$password
WHERE consumer_id=$consumer_id;
";

if(mysqli_query($con,$s))
{
	echo 'updated';
}
else
{
	echo 'not updated';
}

header("refresh:2;url=front.html");




?>