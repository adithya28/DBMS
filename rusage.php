<?php
$con= mysqli_connect('localhost','root','','dbms');

$employee_id=$_POST['employee_id'];
$usage=$_POST['usage'];
$consumer_id=$_POST['consumer_id'];
$month=$_POST['month'];


$query=
"INSERT INTO record(consumer_id,employee_id,consumer_usage,month,status) VALUES ('$consumer_id','$employee_id','$usage','$month','NOT PAID')";


if($is_query_run=mysqli_query($con,$query))
{
	 echo "UPDATED";
	
}
else
{
	echo "not exceuted";
}

?>