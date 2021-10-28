<?php
$serverName = "localhost";
$userName ="root";
$userPwd ="";
$db ="contentdb";

$con = new mysqli($serverName, $userName, $userPwd, $db);

if($con->connect_error)
{
	die("Connection failed: ".$con->connect_error);
}