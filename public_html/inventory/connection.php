<?php
$servername="localhost";
$username="id2006420_admin";
$password="12qw34er";
$dbname="id2006420_db001";


$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
mysqli_set_charset($conn,"utf8");
echo "Connected successfully";
?>