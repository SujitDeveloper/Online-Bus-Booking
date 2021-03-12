<?php

$connection = mysqli_connect("localhost",'root','','Online-Bus-Booking');

if(!$connection) {
	die("Unable to connect" . mysqli_error($connection));
}

?>