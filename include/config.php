<?php

/*
 
 Author - 0xWarning
 Github - @0xWarning / https://github.com/0xWarning
 Project - PHP config example with mysql keycheck
 Summary - Simple project someone might find usefull
 */

$myhost = "localhost"; // IP Of DB Server /or localhost
$myuser = "root"; // DB Username
$mypass = "*3@"; // DB Password
$mydb = "api"; // DB Name
$key = "35363774"; // Encryption Key

$con = mysqli_connect($myhost, $myuser, $mypass, $mydb);
mysqli_query($con, "SET NAMES UTF8") or die(mysqli_error($con));
setlocale(LC_TIME, 'en_GB'); // Set Locale
date_default_timezone_set('Europe/London'); // Set Timezone
error_reporting(E_ALL); // Error Report Shit


if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error(); // Fail Message
}

?>
