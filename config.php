<?php
$servername="localhost";
$username = "root";
$password="";
$DB="awesome_chocolate";

//create connection
$conn= mysqli_connect($servername, $username,$password,$DB);

//check connection
if(!$conn){
    die("Connection failed:".mysqli_connect_error());
}
// echo "Connected successfully";


?>