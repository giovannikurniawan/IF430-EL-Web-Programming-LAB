<?php

    if(isset($_POST["register"])) {

        $users = $_POST["username"];
        $salt = $_POST["salt"];
        $passwordSalt = $_POST["passwordSalt"];
        $confirmPassword = $_POST["password"];

        $resultHash = md5($passwordSalt);

        if(empty($users) || empty($salt) || empty($passwordSalt) || empty($confirmPassword)) {
            echo "<div class='alert alert-danger'>Harap Isi semua data!</div>";
        } 
        else {
            if($resultHash == md5($confirmPassword . $salt)) {
                include "../include/db_connect.php";

                $query = "INSERT INTO user (username, password, salt)
                VALUES ('" . $users . "', '" . $resultHash . "', '" . $salt . "');";
                
                if ($conn->query($query) === TRUE) {
                    echo "<div class='alert alert-success'>Registrasi berhasil! Anda akan kembali ke home dalam waktu 3 detik.</div>";
                    header("refresh:3; url=../index.php");
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }

                $conn->close();
            }
            else { //If confirm password == false
                echo "<div class='alert alert-danger'>Password tidak cocok!</div>";
            }
        }

    }

    if(isset($_POST["cancel"])) {
        header("Location: ../index.php");
    }

?>