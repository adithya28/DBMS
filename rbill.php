<?php
$con= mysqli_connect('localhost','root','','dbms');


$consumer_id=$_POST['consumer_id'];
$month=$_POST['month'];

$q1="SELECT region_id from consumption where consumer_id='$consumer_id'";
$q11=mysqli_query($con,$q1);
$row1=mysqli_fetch_array($q11,MYSQLI_ASSOC);
$region_id=$row1['region_id'];
$q2="SELECT rate FROM region where region_id='$region_id'";

$q22=mysqli_query($con,$q2);
$row2=mysqli_fetch_array($q22,MYSQLI_ASSOC);
$rate=$row2['rate'];

$q3="SELECT consumer_usage FROM record where consumer_id='$consumer_id'";
$q33=mysqli_query($con,$q3);
$row3=mysqli_fetch_array($q33,MYSQLI_ASSOC);
$usage=$row3['consumer_usage'];

$bill=($usage*$rate);

echo $bill;

$query1=
"UPDATE record
SET bill='$bill'
WHERE consumer_id='$consumer_id' AND month='$month'; ";


if($is_query_run=mysqli_query($con,$query1))
{
	 echo "UPDATED";
	
}
else
{
	echo "not exceuted";
}

?>