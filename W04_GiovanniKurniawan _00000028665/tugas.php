<!DOCTYPE html>
<html lang="en">
<head>
	<title> Tugas Pendahuluan</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css" rel="stylesheet">
	<!--script src="https://code.jquery.com/jquery-3.3.1.js"></script-->
	<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
	<script>
		$(document).ready(function() {
			$('#example').DataTable();
			$('#myModal').modal({
				keyboard: false,
				show: true,
			});
			$('#myModal .close').css('display', 'none');
		});
	</script>
</head>
<body class="wide comments example dt-example-bootstrap">
	<header>
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class= "navbar-header" >
					<a class="navbar-brand" href="#"> [IF430] Web Programming </a>
				</div>
				<div>
					<ul class="nav navbar-nav navbar-right">
						<li class= "active" ><a href="#"> Products </a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<div class = "container">
		<div class = "col-sm-12">
			<div class = "col-sm-2"></div>
			<div class = "col-sm-8">
				<form action="submission.php" method="POST">
					<button type = "submit" class = "glyphicon glyphicon-plus-sign btn btn-md btn-primary" style="display:block; margin:20px 0px 20px auto">Submit</button>
				</form>
			</div>
			<div class = "col-sm-2"></div>
		</div>
		<div class = "col-sm-12">
			<div class = "col-sm-2"></div>
			<div class = "col-sm-8">
				<table id="example" class = "table table-striped table-bordered" style="width:100%;">
					<thead>
						<tr>
							<th> # </th>
							<th> NIM </th>
							<th> Nama Depan </th>
							<th> Nama Belakang </th>
							<th> Prodi </th>
						</tr>
					</thead>
					<tbody action = "data.php">
						<?php
							if(!isset($_POST['Submit'] ))
								if (!isset($_POST['Re-submit']))
									require_once('modal.php');
							//didalam tag tbody
							$host = "localhost";
							$username = "root";
							$dbname = "week04";
							$password = "";
							
							$db = new mysqli($host, $username, $password, $dbname);
							
							$query = "SELECT * FROM student";
							$result = $db->query($query);
							$i = 1;
							while($row = $result->fetch_assoc()){
								echo "<tr>";
									echo "<td>" . $i . "</td>";
									echo "<td>" . $row['NIM'] . "</td>";
									echo "<td>" . $row['Nama_Depan'] . "</td>";
									echo "<td>" . $row['Nama_Belakang'] . "</td>";
									echo "<td>" . $row['Prodi'] . "</td>";
								echo "</tr>";
								$i++;
							}
							
							mysqli_free_result($result);
							mysqli_close($db);
							
							//CEK
							$db = new mysqli($host, $username, $password, $dbname);
							if (isset($_POST['Submit']) ) {
								$email = $_POST['email'];
								$pass = $_POST['pass'];
								$q = mysqli_query($db, "SELECT * FROM user WHERE email = '$email' AND pass = md5(concat('$pass', salt))");
								//echo $q;
								$x = mysqli_num_rows($q);
								if ($x==0)
								{
									require_once ('modalError.php');
								}
							}
							if (isset($_POST['Re-submit']) ) {
								$email = $_POST['email'];
								$pass = $_POST['pass'];
								$q = mysqli_query($db,"SELECT * FROM user where email = '$email' and pass = md5(concat('$password',salt))");
								if (mysqli_num_rows($q)==0)
								{
									require_once ('modalError.php');
								}
							}
						?>
					</tbody>
					<tfoot>
						<tr>
							<td> <b>#</b> </td>
							<td> <b>NIM</b> </td>
							<td> <b>Nama Depan</b> </td>
							<td> <b>Nama Belakang</b> </td>
							<td> <b>Prodi</b> </td>
						</tr>
					</tfoot>
				</table>
			</div>
			<div class = "col-sm-2"></div>
		</div>
	</div>
</body>
</html>