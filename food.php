<?php

$dbh=mysql_connect('localhost','root','')or die(mysql_error());
mysql_select_db('hotel management')or die(mysql_error());

	 $food_name = $_REQUEST['food_name'];
	 $food_cost = $_REQUEST['food_cost'];
	 $guest_id = $_REQUEST['guest_id'];
	 
$query="INSERT INTO food VALUES('$food_name','$food_cost','$guest_id')";
$result=mysql_query($query) or die(mysql_error());
echo "<br><center>Data inserted successfully</center>";
$var=mysql_query("SELECT *FROM food");
echo("<center>");
echo"<table border size=1>";
echo"<tr><th>food_name</th><th>food_cost</th><th>guest_id</th></tr>";

while($arr=mysql_fetch_row($var))
{
	$id=$arr[0];
	echo"<tr><td>$arr[0]</td><td>$arr[1]</td><td>$arr[2]</td></tr>";
	
}
echo"</table>";
echo("</center>");
?>