<!DOCTYPE html>
<html>
<head>
	<title>Challenge</title>
		<script src="https://code.jquery.com/jquery-3.3.1.js"></script>

	<!-- Bootstrap -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>

    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
	<style type="text/css">
	td.details-control {
 	   background: url('details_open.png') no-repeat center center;
       cursor: pointer;
		}
		tr.shown td.details-control {
    	background: url('details_close.png') no-repeat center center;
		}
	</style>
</head>
<body>
<script>
/* Formatting function for row details - modify as you need */

$(document).ready(function() {
		<?php if(!$login): ?>
		$('#myModal').modal({
 			keyboard: false,
	 		show: true,
 			backdrop: 'static'
 		});

	<?php endif ?>
    var table = $('#example').DataTable( {
        "data": <?= json_encode($output)?>,
        "columns": [
            { "data": "nim"},
            { "data": "namaDepan" },
            { "data": "namaBelakang" },
            { "data" : "prodi"}
        ],
        "order": [[1, 'asc']]
    } );
    
} );


</script>

	<header>
	
        <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header">
       <h4 style="color:grey">[IF635] Web Programming </h4>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Employees</a></li>
    </ul>
  </div>
</nav>
	</header>
	<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Student ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Study Field</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Student ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Study Field</th>
            </tr>
        </tfoot>
    </table>
	
	<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Sign In</h4>
      </div>
	  <form action="" method="post">

      <div class="modal-body">
  		<div class="form-group">
   		 	<label for="email">Email</label>
    		<input type="text" class="form-control" id="email" name="email" placeholder="Masukkan email">
 		 </div>
  		<div class="form-group">
    		<label for="pwd">Password</label>
    		<input type="password" class="form-control" id="pwd" name="pwd" placeholder="Masukkan password">
  		</div>
		<?php if($invalid ): ?>
			<span class="error text-danger">Email tidak terdaftar atau password salah, silahkan coba lagi</span><br><br>
		<?php endif ?>
		<button type="submit" class="btn btn-primary">Submit</button>

      </div>
	  </form>

    </div>

  </div>
</div>
</body>
</html>