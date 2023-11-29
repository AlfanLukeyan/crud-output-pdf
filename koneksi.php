<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "crud-output-pdf";
$socket = "/Applications/XAMPP/xamppfiles/var/mysql/mysql.sock"; // replace with the actual path

$pdo = new PDO("mysql:unix_socket=$socket;dbname=$database", $username, $password);
?>