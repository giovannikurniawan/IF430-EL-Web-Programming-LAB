<?php
    session_start();
    if(!empty($_SESSION["loggedIn"])) {
        header("Location: view/student_data.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Week 06</title>
    <link rel="stylesheet" href="assets/bootstrap-3.3.7/dist/css/bootstrap.min.css">
    <script src="assets/jquery-3.2.1.min.js"></script>
    <script src="assets/bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#myModal').modal({
                keyboard: false,
                show: true,
                backdrop: 'static'
            });

            $('#loginForm').submit(function(){
                return false;
            });

            $('#registerBtn').click(function(){
                window.location.href = "view/register_user.php";
            });

            $('#loginBtn').click(function(){
                var username = $('#username').val();
                var password = $('#password').val();
                if(username != '' && password != '')
                {
                    $.ajax({
                        url:"controller/check_loginuser.php",
                        method:"POST",
                        data:{username: username, password: password},
                        success: function(data){
                            if(data == 'False'){
                                $('#loginInfo').css("display", "block");
                            }
                            else if(data == 'True') {
                                $('#myModal').modal('hide');
                                window.location.href = "view/student_data.php";
                            }
                            else{
                                alert("Something went wrong! check console for more details");
                                console.log(data);
                            }
                        },
                        error: function(){
                            alert("Something went wrong!");
                        }
                    });
                }
                else 
                {
                    alert("Harap isi username dan password!")
                }
            });
        });
    </script>
</head>
<nav class="navbar navbar-default" style="padding-right: 15px;">
    <div class="container-fluid">
        <div class=navbar-header>
            <a class="navbar-brand" href="#">[IF635] Web Programming</a>
        </div>
        <div>
            <ul class="nav navbar-nav navbar-right">
                <li class=active><a href="#">Students</a></li>
            </ul>
        </div>
    </div>
</nav>
</html>
<!-- MODAL -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" style="text-align: center;">Login</h2>
            </div>
            <div class="modal-body">
                <form id="loginForm" class="form-horizontal" method="post" action="">
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="username" style="text-align: left;">Username :</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="password" style="text-align: left;">Password :</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        </div>
                    </div>
                    <div id="loginInfo" style="color: red; display: none;">
                        <div>Email tidak terdaftar atau password salah, silakan coba lagi</div>
                        <br>
                    </div>
                    <div class="modal-footer">
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button id="loginBtn" type="submit" class="btn btn-primary">Login</button>
                                <button id="registerBtn" type="submit" class="btn btn-warning">Register</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>