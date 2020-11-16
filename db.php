<?php

$servername = "localhost";
$username = "root";     //by default username is root if you dont change it
$password = "*****";    //use your sql password
$dbname = "crs";      // Database Nmae

// Create Connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check Connection
if($conn->connect_error){
	die("Connection Failed!".$conn->connect_error);
}
