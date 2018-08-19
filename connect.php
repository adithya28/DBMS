<?php


$mysql_host='localhost';
$mysql_user='root';
$mysql_password='';



if(@mysql_connect($mysql_host,$mysql_user,$mysql_password))
{
//echo 'connected  ';
if(@mysql_select_db('dbms'))
	echo 'connected to db';
else
	die('not connected to db');
}

else
{
	die('Not connected');
}



?>