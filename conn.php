<?php

$server_name = "localhost";
$username = "root";
$password = "";
$dbname = "quotes_data";


$conn = new mysqli($server_name,$username,$password,$dbname);

if(!$conn){
    echo "Unsuccessful connect";
}

?>