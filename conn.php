<?php
    $server_name = "localhost";
    $username ="root";
    $password="";
    $dbname = "art_gallary";
    $conn = mysqli_connect($server_name,$username,$password,$dbname);
    if(!$conn){
        echo "connection failed...";
    }
    else{
        echo "connection sucessfull";
    }
?>