<?php
$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dbName = "clients";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dbName);

if (!$conn) {
    die("Connection failed " . mysqli_connect_error());
}