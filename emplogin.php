<?php
$con= mysqli_connect('localhost','root','','dbms');

$empname=$_POST['empname'];
$emppassword=$_POST['emppassword'];
//$consumer_id=$_POST['consumer_id'];


$query=
"SELECT employee_id,eusername,epassword
FROM employeelogin
WHERE eusername='$empname' AND epassword='$emppassword'";


if($is_query_run=mysqli_query($con,$query))
{
	 if($row = mysqli_fetch_array($is_query_run,MYSQLI_ASSOC))
	 {
		 if(($empname=$row['eusername'])&&($emppassword=$row['epassword']))
		 {
			echo 'Valid Login<br>';
			echo "   Logged IN<br>";
			header("refresh:2;url=emploginp.html");
		 }
		 else
		 {
			 echo "invalid password";
		 }
		echo''.$row['employee_id'].''.$row['eusername'].''.$row['epassword'].'';
		 
	 }
	
}
else
{
	echo "not exceuted";
}

?>