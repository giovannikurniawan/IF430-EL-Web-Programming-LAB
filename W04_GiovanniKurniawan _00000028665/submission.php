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
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
	<script>
		$(document).ready(function() {
			$('#example').DataTable();
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
	<div class = "container-fluid">
		<div class = "col-sm-12">
			<div class = "col-sm-8">
				<form action = "data.php" method="POST">
					<div class="form-group">
						<label for="NIM">NIM</label>
					<input type="id" class="form-control" name="nim" placeholder="NIM">
					</div>
					<div class="form-group">
						<label for="namaDepan">Nama Depan</label>
						<input type="text" class="form-control" name="namaDepan" placeholder="Nama Depan">
					</div>
					<div class="form-group">
						<label for="namaBelakang">Nama Belakang</label>
						<input type="text" class="form-control" name="namaBelakang" placeholder="Nama Belakang">
					</div>
					<div class="form-group">
						<label for="prodi">Prodi</label>
						<textarea class="form-control" name="prodi" rows="1" placeholder="Prodi"></textarea>
					</div>
					<button type="submit" class="btn btn-lg btn-primary active">Submit</button>
					<a href="tugas.php"><button type="button" name="Cancel" class="btn btn-default btn-lg active">Cancel</button></a>
				</form>
			</div>
			<div class = "col-sm-4"></div>
		</div>
	</div>
</body>
</html>