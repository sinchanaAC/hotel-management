<?php

$dbh=mysql_connect('localhost','root','')or die(mysql_error());
mysql_select_db('hotel management')or die(mysql_error());

	 $hotel_id = $_REQUEST['hotel_id'];
	 $name = $_REQUEST['name'];
	 $phone = $_REQUEST['phone'];
	 $address = $_REQUEST['address'];
	 $city = $_REQUEST['city'];
	 
	 

$query="INSERT INTO hotel VALUES('$hotel_id','$name','$phone','$address','$city')";
$result=mysql_query($query) or die(mysql_error());
echo "<br><center>Data inserted successfully</center>";
$var=mysql_query("SELECT *FROM hotel");
echo("<center>");
echo"<table border size=1>";
echo"<tr><th>hotel_id</th><th>name</th><th>phone</th><th>address</th><th>city</th></tr>";

while($arr=mysql_fetch_row($var))
{
	$id=$arr[0];
	echo"<tr><td>$arr[0]</td><td>$arr[1]</td><td>$arr[2]</td><td>$arr[3]</td><td>$arr[4]</td></tr>";
	
}
echo"</table>";
echo("</center>");
?>