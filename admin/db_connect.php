<?php
$host = "sql12.freesqldatabase.com"; // or the host you got
$username = "sql12786243";
$password = "ZMv6VuYWAF";
$database = "sql12786243";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}