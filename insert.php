<?php

$mysql_host='localhost';
$mysql_user='root';
$mysql_password='';
$con= mysqli_connect('localhost','root','','dbms');

$consumer_name=$_POST['name'];
$dob=$_POST['dob'];
$consumer_address=$_POST['address'];
$gender=$_POST['gender'];
$region=$_POST['region'];




$sql=
"
INSERT INTO consumer(consumer_name,consumer_address,dob,gender)
 VALUES ('$consumer_name','$consumer_address','$dob','$gender')
 ";
if(mysqli_query($con,$sql))
{
	echo 'inserted';
}
else
{
	echo 'not inserted';
}

$r=
"
INSERT INTO consumption(region_id,consumer_id)
SELECT region_id,consumer_id
  FROM region,consumer
 WHERE consumer_name='$consumer_name' AND region_name='$region';
";
 
if(mysqli_query($con,$r));
echo "sucessful 2nd query";


header("refresh:2;url=front.html")
?>