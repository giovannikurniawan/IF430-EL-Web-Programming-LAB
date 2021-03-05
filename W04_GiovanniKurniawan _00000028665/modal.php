<!DOCTYPE html>
<html>
<head>
	<title></title>
	<title>Database-Mahasiswa</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="modal" id="myModal" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Sign In</h4>
				</div>
				
				<div id = "logindulu" class="modal-body">
					<form method="POST" action="tugas.php">
						<div class="form-group">
							<label for="email">Email</label>
							<input type="text" class="form-control" id = "email" name="email" placeholder="Masukkan email">
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" class="form-control" id = "password" name="password" placeholder="Masukkan password">
						</div>
						<div id="respon">
						</div>
						<button type="submit" class="btn btn-lg btn-primary active" name = "Submit">Sign In</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
	$(document).ready(function()
	{
		$('#myModal').modal({
			keyboard: false,
			show: true,
			backdrop: 'static'
		});
		$('#myModal .close').css('display', 'none');
	});
	</script>
</body>
</html>


