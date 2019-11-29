<?php

$dbh=mysql_connect('localhost','root','')or die(mysql_error());
mysql_select_db('hotel management')or die(mysql_error());

	 $guest_id = $_REQUEST['guest_id'];
	 $guest_name = $_REQUEST['guest_name'];
	 $email = $_REQUEST['email'];
	 
	 

$query="INSERT INTO guest VALUES('$guest_id','$guest_name','$email')";
$result=mysql_query($query) or die(mysql_error());
echo "<br><center>Data inserted successfully</center>";
$var=mysql_query("SELECT *FROM guest");
echo("<center>");
echo"<table border size=1>";
echo"<tr><th>guest_id</th><th>guest_name</th><th>email</th></tr>";

while($arr=mysql_fetch_row($var))
{
	$id=$arr[0];
	echo"<tr><td>$arr[0]</td><td>$arr[1]</td><td>$arr[2]</td></tr>";
	
}
echo"</table>";
echo("</center>");
?>