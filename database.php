<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'contact_db';
$conn = new mysqli('localhost','root','','contact_db');
if ($conn->connect_error) {
    echo "$conn->connect_error";
    die("Connection Failed : " . $conn->connect_error);
}
?>