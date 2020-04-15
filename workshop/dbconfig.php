<?php

$server_name = 'localhost';
$username = 'root';
$password = '';
$database_name = 'project';

$connection = mysqli_connect($server_name, $username, $password);
$db = mysqli_select_db($connection, $database_name);

if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>
