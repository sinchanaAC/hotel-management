
<html>
<head>

</head>
<body>
<?php
function input() {
global $buffer;
global $guest_id,$room_id,$start_date,$end_date;

         $guest_id = $_REQUEST['guest_id'];
	 $room_id = $_REQUEST['room_id'];
	 $start_date = $_REQUEST['start_date'];
	 $end_date = $_REQUEST['end_date'];
}

input();

function packs() {
	global $buffer;
	global $guest_id,$room_id,$start_date,$end_date;
	$buffer=$guest_id."|".$room_id."|".$start_date."|".$end_date."#".PHP_EOL;
}
	 packs();
	
function write() {
	global $buffer;
	 $fp=fopen("t1.txt","a");
	 fwrite($fp,$buffer);
	 fclose($fp);
	echo "data is inserted";
}
	 write();
?>
</body>
</html>