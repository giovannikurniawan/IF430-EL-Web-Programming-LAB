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
					<h4 style="color:grey"> [IF635] Web Programming </h4>
				</div>
				<ul class="navbar-nav">
					<li class="navbar-right active"><a href="#"> Student </a></li>
				</ul>
			</div>
		</nav>
	</header>
<div class="container-fluid">	
		<form action = "update.php" method="POST">
			<?php
				$NIM = $_POST['NIM'];
				echo "<input type = 'hidden' name = 'Old_NIM' value = '" . $NIM . "'>";
			?>
			<div class="form-group">
				<label for="studentid">NIM</label>
			<input type="id" class="form-control" name="NIM" placeholder="NIM">
			</div>
			<div class="form-group">
				<label for="Nama_Depan">Nama Depan</label>
				<input type="text" class="form-control" name="Nama_Depan" placeholder="Nama Depan">
			</div>
			<div class="form-group">
				<label for="lastname">Nama Belakang</label>
				<input type="text" class="form-control" name="Nama_Belakang" placeholder="Nama Belakang">
			</div>
			<div class="form-group">
				<label for="description">Prodi</label>
				<textarea class="form-control" name="Prodi" rows="1" placeholder="Prodi"></textarea>
			</div>
				<button type="submit" class="btn btn-lg btn-primary active">Submit</button>
				<a href="home.php"><button type="button" name="Cancel" class="btn btn-default btn-lg active">Cancel</button></a>
		</form>
	</div>
	
	
</body>
</html>