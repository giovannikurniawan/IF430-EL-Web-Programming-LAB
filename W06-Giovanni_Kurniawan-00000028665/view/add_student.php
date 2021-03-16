<?php 
    session_start();

    if(empty($_SESSION["loggedIn"])) {
        header("Location: ../index.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
    <link rel="stylesheet" href="../assets/bootstrap-3.3.7/dist/css/bootstrap.min.css">
    <script src="../assets/jquery-3.2.1.min.js"></script>
    <script src="../assets/bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){

        });
    </script>
</head>
<nav class="navbar navbar-default" style="padding-right: 15px;">
    <div class="container-fluid">
        <div class=navbar-header>
            <a class="navbar-brand" href="#">[IF635] Web Programming</a>
        </div>
    </div>
</nav>
<?php
    if(isset($_POST["add"])) {

        $StudentId = $_POST["studentID"];
        $StudentName = $_POST["studentName"];
        $StudentNIM = $_POST["studentNIM"];
        $StudentAngkatan = $_POST["studentAngkatan"];
        $StudentJurusan = $_POST["studentJurusan"];

        if(empty($StudentId) || empty($StudentName) || empty($StudentNIM) || empty($StudentAngkatan) || empty($StudentJurusan)) {
            echo "<div class='alert alert-danger'>Harap Isi semua data!</div>";
        } else {
            include "../include/db_connect.php";

            $query = "INSERT INTO siswa (Student_Id, Student_Name, Student_Nim, Student_Angkatan, Student_Jurusan)
            VALUES ('" . $StudentId . "', '" . $StudentName . "', '" . $StudentNIM . "', '" . $StudentAngkatan . "', '" . $StudentJurusan . "');";
            
            if ($conn->query($query) === TRUE) {
                echo "<div class='alert alert-success'>Data Student berhasil ditambah! Anda akan kembali ke home dalam waktu 3 detik.</div>";
                header("refresh:3; url=../index.php");
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
        }
        
    }

    if(isset($_POST["cancel"])) {
        header("Location: ../index.php");
    }
?>
<div class="container">
    <h1 style="text-align: center;">Add Student</h1>
    <form id="updateForm" class="form-horizontal" method="post" action="<?php $_SERVER["PHP_SELF"] ?>">
        <div class="form-group">
            <label class="control-label col-sm-3" for="studentID" style="text-align: left;">Student ID :</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="studentID">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3" for="studentName" style="text-align: left;">Student Name :</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="studentName">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3" for="studentNIM" style="text-align: left;">Student NIM :</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="studentNIM">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3" for="studentAngkatan" style="text-align: left;">Student Angkatan :</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="studentAngkatan">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3" for="studentJurusan" style="text-align: left;">Student Jurusan :</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="studentJurusan">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-1">
                <button id="registerBtn" type="submit" class="btn btn-primary" name="add">Add Student</button>
            </div>
            <div class="col-sm-1 col-sm-offset-1">
                <button id="cancelBtn" type="submit" class="btn" name="cancel">Cancel</button>
            </div>
        </div>
    </form>
</div>
</html>