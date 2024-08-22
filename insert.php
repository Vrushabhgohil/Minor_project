<?php
    include "conn.php";
    if(isset($_REQUEST['submit'])){
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
        if($name !="" && $password != "" && $email != ""){
            $query = "INSERT INTO User (name, email , password) VALUES ('$name', '$email' ,'$password')";
            if (mysqli_query($conn, $query)) {
                header("Location: http://localhost/project_backend/new_project/login.html");
            }
            else{
                header("Location: http://localhost/project_backend/new_project/signup.html");
            }
        }
        else {
            echo "Name and password cannot be empty";
        }
        
    }
?>