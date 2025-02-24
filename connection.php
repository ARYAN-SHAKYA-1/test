<?php
$host= "localhost";
$user="root";
$password="";
$database="stocks_db";
$conn = new mysqli($host,$user,$password,$database);
if($conn-> connect_error){
    die("connection failed");
}
echo "connection";
?>