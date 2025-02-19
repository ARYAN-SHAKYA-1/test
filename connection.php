<?php
$host= "localhost";
$uesr="root";
$password="";
$database="stocks_db"
$conn=new mysqli($host,$user,$password,$database)
if($conn-> connection_error){
    die("connection failed");
}
?>