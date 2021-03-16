<?php

    if(!empty($_SESSION["loggedIn"])) {
        header("Location: ../index.php");
    }

    include '../include/db_connect.php';

    if(isset($_POST["username"]))
    {
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        $query = "SELECT * FROM user WHERE username = '" . $username . "';";
        
        $checkQuery = $conn->query($query);
        if (mysqli_num_rows($checkQuery) != 1)
        {
            echo "False"; // Username not found
            exit();
        }

        $userinfo = mysqli_fetch_assoc($checkQuery);

        $salt = $userinfo["salt"];        // Get salt from database
        $hash = $userinfo["password"];    // Get password from database

        // Check for password
        if(md5($password . $salt) == $hash)
        {
            echo 'True';
            session_start();
            $_SESSION["loggedIn"] = $username;
        }
        else {
            echo 'False';
        }

        $conn->close();
    }
?>