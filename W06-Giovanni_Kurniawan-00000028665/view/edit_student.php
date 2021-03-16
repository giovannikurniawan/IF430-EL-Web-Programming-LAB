<?php
    session_start();

    if(empty($_SESSION["loggedIn"])) {
        header("Location: ../index.php");
    }

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        include "../include/db_connect.php";
        include "../model/Student.php";

        $query = "SELECT * from siswa WHERE Student_Id = '$id'";
        $result = $conn->query($query);

        $students = mysqli_fetch_assoc($result);
        $data = new Student($students["Student_Id"], $students["Student_Name"], $students["Student_Nim"], $students["Student_Angkatan"], $students["Student_Jurusan"]);

        $conn->close();
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Update Student</title>
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
    if(isset($_POST["update"])) {
        include "../include/db_connect.php";

        $data->setStudent_Name($_POST["studentName"]);
        $data->setStudent_Nim($_POST["studentNIM"]);
        $data->setStudent_Angkatan($_POST["studentAngkatan"]);
        $data->setStudent_Jurusan($_POST["studentJurusan"]);

        $StudentId = $data->getStudent_Id();
        $StudentName = $data->getStudent_Name();
        $StudentNIM = $data->getStudent_Nim();
        $StudentAngkatan = $data->getStudent_Angkatan();
        $StudentJurusan = $data->getStudent_Jurusan();

        $query = "UPDATE siswa SET Student_Name = '$StudentName', Student_Nim = '$StudentNIM', Student_Angkatan = '$StudentAngkatan', Student_Jurusan = '$StudentJurusan' WHERE Student_Id = '$StudentId';";
        
        if ($conn->query($query) === TRUE) {
            echo "<div class='alert alert-success'>Data Student berhasil diedit! Anda akan kembali ke home dalam waktu 3 detik.</div>";
            header("refresh:3; url=../index.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }

    if(isset($_POST["cancel"])) {
        header("Location: ../index.php");
    }
?>
<div class="container">
    <h1 style="text-align: center;">Update Student</h1>
    <form id="updateForm" class="form-horizontal" method="post" action="<?php $_SERVER["PHP_SELF"] ?>">
        <div class="form-group">
            <label class="control-label col-sm-3" for="studentID" style="text-align: left;">Student ID :</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="studentID" value="<?php echo $data->getStudent_Id(); ?>" disabled>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3" for="studentName" style="text-align: left;">Student Name :</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="studentName" value="<?php echo $data->getStudent_Name(); ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3" for="studentNIM" style="text-align: left;">Student NIM :</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="studentNIM" value="<?php echo $data->getStudent_Nim(); ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3" for="studentAngkatan" style="text-align: left;">Student Angkatan :</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="studentAngkatan" value="<?php echo $data->getStudent_Angkatan(); ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3" for="studentJurusan" style="text-align: left;">Student Jurusan :</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="studentJurusan" value="<?php echo $data->getStudent_Jurusan(); ?>">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-1">
                <button id="registerBtn" type="submit" class="btn btn-primary" name="update">Update Student</button>
            </div>
            <div class="col-sm-1 col-sm-offset-1">
                <button id="cancelBtn" type="submit" class="btn" name="cancel">Cancel</button>
            </div>
        </div>
    </form>
</div>
</html>