<?php 
    session_start();

    if(empty($_SESSION["loggedIn"])) {
        header("Location: ../index.php");
    }

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if($_POST['action'] == 'logout') {
            session_destroy();
            header("Location: ../index.php");
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Data</title>
    <link rel="stylesheet" href="../assets/bootstrap-3.3.7/dist/css/bootstrap.min.css">
    <script src="../assets/jquery-3.2.1.min.js"></script>
    <script src="../assets/bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){

        });

        function deleteStudent( id ){
            var answer = confirm('Are you sure?');
            if(answer){
                $.ajax({
                    url:"student_data.php?id=" + id,
                    method:"GET",
                    success: function(data){
                        alert("Student dengan id " + id + " berhasil dihapus!");
                        location.reload();
                    },
                    error: function(){
                        alert("Something went wrong!");
                    }
                });
            } 
        }
    </script>
</head>
<nav class="navbar navbar-default" style="padding-right: 15px;">
    <div class="container-fluid">
        <div class=navbar-header>
            <a class="navbar-brand" href="#">[IF635] Web Programming</a>
        </div>
        <div>
            <ul class="nav navbar-nav navbar-right">
                <li style="padding-top: 15px; paddingbottom: 15px; padding-right: 15px;">
                <?php
                    echo $_SESSION["loggedIn"];
                ?>
                </li>
                <li>
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                        <input id="logoutBtn" type="submit" name="action" class="btn btn-danger" value="logout" style="margin-top:10%; margin-right: 15px;">
                    </form>
                </li>
                <li class=active><a href="#">Students</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container" style="text-align: right;">
    <form method="post" action="add_student.php">
        <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-plus"><strong>Student</strong></i></button>
    </form>
</div>
<div class="container">
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Student Name</th>
                <th>Student NIM</th>
                <th>Student Angkatan</th>
                <th>Student Jurusan</th>
                <th></th>
            </tr>
        </thead>
        <tbody id="data">
            <?php

                include "../model/Student.php";
                include "../include/db_connect.php";

                $query = "SELECT * from siswa";
                $result = $conn->query($query);

                $data = array();
                $i = 0;
                while($col = mysqli_fetch_assoc($result)) {
                    array_push($data, new Student($col["Student_Id"], $col["Student_Name"], $col["Student_Nim"], $col["Student_Angkatan"], $col["Student_Jurusan"]));
                    $i++;
                }

                foreach ($data as $x) {
                    echo "<tr>";
                    echo "<td>" . $x->getStudent_Name() . "</td>";
                    echo "<td>" . $x->getStudent_Nim() . "</td>";
                    echo "<td>" . $x->getStudent_Angkatan() . "</td>";
                    echo "<td>" . $x->getStudent_Jurusan() . "</td>";
                    echo "<td>";
                        echo "<a href='edit_student.php?id={$x->getStudent_Id()}' class='glyphicon glyphicon-edit'></a>";
                        echo "<a onclick='deleteStudent(\"{$x->getStudent_Id()}\");' class='glyphicon glyphicon-remove'></a>";
                    echo "</td>";
                    echo "</tr>";
                }

                $conn->close();

            ?>
        </tbody>
    </table>
</div>
</html>
<?php

    if(isset($_GET['id'])) {
        include "../include/db_connect.php";

        $id = $_GET['id'];

        $query = "DELETE FROM siswa WHERE Student_Id = '$id'";

        if (mysqli_query($conn, $query)) {
            echo "True";
         } else {
            echo "Error deleting record: " . mysqli_error($conn);
         }

         $conn->close();
    }

?>