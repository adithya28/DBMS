<?php

require 'connect.php';

$query="select * from board";
if($is_query_run=mysql_query($query))
{
	echo "    query executed<br>";
	
	while($query_exceute=mysql_fetch_assoc($is_query_run))
	{
		echo 
		'<table border="1">
		<tr>
		<td>
		'.$query_exceute['board_name'].'
		</td>
		</tr>
		<tr>
		<td>
		'.$query_exceute['board_address'].'
		</td>
		</tr>
		</table>';
		//echo $query_exceute['board_name'].'<br>';
	}
}
else
{
	echo "not exceuted";
}

?>