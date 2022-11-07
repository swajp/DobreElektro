<?php

$serverName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "dobreelektro";

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

if (!$conn)
{
    die("Connection failed: " . mysqlite_connect_error());
}