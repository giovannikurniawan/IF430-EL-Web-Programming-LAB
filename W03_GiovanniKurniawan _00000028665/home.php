<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
		<title> Tugas</title>
		<!-- Bootstrap -->
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Data Tables -->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.css" rel="stylesheet">
		<link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css" rel="stylesheet">
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
		<script>
			$(document).ready(function(){
					$('#TableData').DataTable();
			}	);
		</script>
	</head>
	<body>
	<header>
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<h4 style="color:blue"> [IF635] Web Programming </h4>
				</div>
				<ul class="navbar-nav">
					<li class="navbar-right active"><a href="#"> Student </a></li>
				</ul>
			</div>
		</nav>
	</header>	
			<form action="form_submission.php" method="POST">
				<button type="submit" class="glyphicon glyphicon-plus-sign btn btn-lg btn-primary" style="display:block;margin:20px 0px 20px auto">Submit</button>
			</form>	
	<table id="TableData" class="table table-striped table-bordered" style="width:100%">
		<thead>
			<tr>
				<th> NIM </th>
				<th> Nama Depan </th>
				<th> Nama Belakang </th>
				<th> Prodi </th>
			</tr>
		</thead>
		<tbody>
			<?php						
				$host = "localhost";
				$username="root";
				$dbname="week04";
				$password="";
				$db = new mysqli($host, $username, $password, $dbname);
				
				$q = "SELECT * FROM student;";
				$result = $db->query($q);
				
				$no = 1;
				
				while($row =  $result->fetch_assoc()){
					echo "<tr>";
						echo "<td>" . $no . "</td>";
						echo "<td>" . $row['NIM'] . "</td>";
						echo "<td>" . $row['Nama_Depan'] . "</td>";
						echo "<td>" . $row['Nama_Belakang'] . "</td>";
						echo "<td>" . $row['Prodi'] . "</td>";
						echo "<td>
									<form action='deleteData.php' method='POST' style='float:left;'>
										<input type='hidden' name='method' value='DELETE'>
										<input type='hidden' name='NIM' value='".$row['NIM']."'>
										<a href='deleteData.php'><button type='submit' class='btn btn-default btn-lg glyphicon glyphicon-remove-sign' style='background-color: #ffffff; padding: 0px 5px;'></button></a>
									</form>
									<form action='updateDataForm.php' method='POST' style='float:left;'>
										<input type='hidden' name='method' value='UPDATE'>
										<input type='hidden' name='NIM' value='".$row['NIM']."'>
										<input type='hidden' name='Nama_Depan' value='".$row['Nama_Depan']."'>
										<input type='hidden' name='Nama_Belakang' value='".$row['Nama_Belakang']."'>
										<input type='hidden' name='Prodi' value='".$row['Prodi']."'>
										<a href='updateDataForm.php'><button type='submit' class='btn btn-default btn-lg glyphicon glyphicon-wrench' style='background-color: #ffffff; padding: 0px 5px;'></button></a>
									</form>
							</td>";
					echo "</tr>";
					
					$no++;
				}
				
				mysqli_free_result($result);
				mysqli_close($db);
			?>
		</tbody>
	</table>
</body>
</html>