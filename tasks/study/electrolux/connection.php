<?php

//server config
$servername= 'localhost';
$db_admin = 'root';
$db_password = '';
$db = 'electrolux';

$conn = mysqli_connect($servername, $db_admin, $db_password, $db);
mysqli_select_db($conn,"datamart_queue_details");

// Create connection
$conn = mysqli_connect($servername, $db_admin, $db_password, $db);

// Check connection
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}

?>