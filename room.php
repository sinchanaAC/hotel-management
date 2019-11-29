<?php

$dbh=mysql_connect('localhost','root','')or die(mysql_error());
mysql_select_db('hotel management')or die(mysql_error());

	 $room_id = $_REQUEST['room_id'];
	 $hotel_id = $_REQUEST['hotel_id'];
	 $room_number = $_REQUEST['room_number'];
	  $rate = $_REQUEST['rent'];
	 
$query="INSERT INTO room VALUES('$room_id','$hotel_id','$room_number','$rent')";
$result=mysql_query($query) or die(mysql_error());
echo "<br><center>Data inserted successfully</center>";
$var=mysql_query("SELECT *FROM room");
echo("<center>");
echo"<table border size=1>";
echo"<tr><th>room_id</th><th>hotel_id</th><th>room_number</th><th>rent</th></tr>";

while($arr=mysql_fetch_row($var))
{
	$id=$arr[0];
	echo"<tr><td>$arr[0]</td><td>$arr[1]</td><td>$arr[2]</td><td>$arr[3]</td></tr>";
	
}
echo"</table>";
echo("</center>");
?>