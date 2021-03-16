<?php
    session_start();
    if(!empty($_SESSION["loggedIn"])) {
        header("Location: view/student_data.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Register User</title>
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
    include "../controller/insert_user.php";
?>
<div class="container">
    <h1 style="text-align: center;">Register User</h1>
    <form id="registerForm" class="form-horizontal" method="post" action="<?php $_SERVER["PHP_SELF"] ?>">
        <div class="form-group">
            <label class="control-label col-sm-3" for="username" style="text-align: left;">Username :</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="username">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3" for="username" style="text-align: left;">Salt :</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="salt">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3" for="password" style="text-align: left;">Password include salt :</label>
            <div class="col-sm-6">
                <input type="password" class="form-control" name="passwordSalt">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3" for="password" style="text-align: left;">Re-type Password :</label>
            <div class="col-sm-6">
                <input type="password" class="form-control" name="password">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-1">
                <button id="registerBtn" type="submit" class="btn btn-primary" name="register">Register</button>
            </div>
            <div class="col-sm-1 col-sm-offset-1">
                <button id="cancelBtn" type="submit" class="btn" name="cancel">Cancel</button>
            </div>
        </div>
    </form>
</div>
</html>
<?php

?>