<?php
$servername="localhost";
$username="root";
$password="";
$dbname="mugo";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error){
    die("connection failed". $conn->connect_error);
}
echo "connection successfull";

