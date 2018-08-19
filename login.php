<?php
$con= mysqli_connect('localhost','root','','dbms');

$user_name=$_POST['username'];
$password=$_POST['userpassword'];
//$consumer_id=$_POST['consumer_id'];


$query=
"SELECT consumer_id,username,password
FROM consumerlogin
WHERE username='$user_name' AND password='$password'";


if($is_query_run=mysqli_query($con,$query))
{
	 if($row = mysqli_fetch_array($is_query_run,MYSQLI_ASSOC))
	 {
		 if(($user_name=$row['username'])&&($password=$row['password']))
		 {
			echo 'Valid Login<br>';
			echo "   Logged IN<br>";
			header("refresh:2;url=userlogin.html");
		 }
		 else
		 {
			 echo "invalid password";
		 }
		//echo''.$row['consumer_id'].''.$row['username'].''.$row['password'].'';
		 
	 }	 
}
else
{
	echo "not exceuted";
}

?>