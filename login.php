<?php
    include "conn.php";
    if(isset($_REQUEST['submit'])){
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
        $query = "SELECT * FROM User WHERE email = '$email' AND password = '$password'";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            header("Location: http://localhost/project_backend/new_project/home.html");
        } 
        else{
            header("Location: http://localhost/project_backend/new_project/login.html");
        }
    }
?>