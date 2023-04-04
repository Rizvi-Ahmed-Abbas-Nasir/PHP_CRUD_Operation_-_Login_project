<?php

$localhost="localhost";
$username="root";
$password="";
$database="ST_Database";

$conn=mysqli_connect($localhost,$username,$password,$database);
if($conn){
    print_r("Connection Success");
}



?>