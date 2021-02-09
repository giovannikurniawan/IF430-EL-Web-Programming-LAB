<!DOCTYPE html>
<html>
<head>
	<title> Challenge </title>
	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- Data Tables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
	<script>
		$(document).ready(function() {
			var table = $('#employees').DataTable();

			function format ( name, birthdate, address, city, home_phone ) {
				// `d` is the original data object for the row
				return '<table class="table" cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+
					'<tbody>'+
					'<tr>'+
						'<td>Full name:</td>'+
						'<td>'+name+'</td>'+
					'</tr>'+
					'<tr>'+
						'<td>Birth Date:</td>'+
						'<td>'+birthdate+'</td>'+
					'</tr>'+
					'<tr>'+
						'<td>Address:</td>'+
						'<td>'+address+'</td>'+
					'</tr>'+
					'<tr>'+
						'<td>City:</td>'+
						'<td>'+city+'</td>'+
					'</tr>'+
					'<tr>'+
						'<td>Home Phone:</td>'+
						'<td>'+home_phone+'</td>'+
					'</tr>'+
					'</tbody>'+
				'</table>';
			}

			$('#employees tbody').on('click', 'td.details-control', function () {
				var tr = $(this).closest('tr');
				var row = table.row( tr );
				var name = $(this).find('#name').val();
				var birthdate = $(this).find('#birthdate').val();
				var address = $(this).find('#address').val();
				var city = $(this).find('#city').val();
				var home_phone = $(this).find('#home_phone').val();
		
				if ( row.child.isShown() ) {
					// This row is already open - close it
					row.child.hide();
					tr.removeClass('shown');
				}
				else {
					// Open this row
					row.child( format(name, birthdate, address, city, home_phone) ).show();
					tr.addClass('shown');
				}
			} );
		} );
	</script>
	<style>
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
	<header>
		<nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class= "navbar-header" >
                    <a class="navbar-brand" href="#"> [IF635] Web Programming  </a>
                </div>
                <div>
                    <ul class="nav navbar-nav navbar-right">
                        <li class= "active" ><a href="#"> Employees </a></li>
                    </ul>
                </div>
            </div>
        </nav>
	</header>
	<div class="container">
		<table id="employees" class="table table-stripped table-bordered" style="width:100%">
			<thead>
				<tr>
					<th>  </th>
					<th> Last Name </th>
					<th> Title </th>
					<th> Extension </th>
				</tr>
			</thead>
			<tbody>
				<?php
					$host = "localhost";
					$username = "root";
					$dbname = "northwind";
					$password = "";

					$conn = new PDO("mysql:host=$host;dbname=$dbname;",$username, $password);

					$query = "SELECT * FROM employees";
					$result = $conn->query($query);

					foreach($result as $row){
						echo "<tr>";
						echo "<td class='details-control'>";
						echo "<input type='hidden' id='name' value='$row[2] $row[1]'>";
						echo "<input type='hidden' id='birthdate' value='$row[5]'>";
						echo "<input type='hidden' id='address' value='$row[7]'>";
						echo "<input type='hidden' id='city' value='$row[8]'>";
						echo "<input type='hidden' id='home_phone' value='$row[12]'>";
						echo "</td>";
						echo "<td>" . $row[1] . "</td>";
						echo "<td>" . $row[3] . "</td>";
						echo "<td>" . $row[13] . "</td>";
						echo"</tr>";
					}

					$result = null;
					$conn = null;
				?>
			</tbody>
			<tfoot>
				<tr>
					<th>  </th>
					<th> Last Name </th>
					<th> Title </th>
					<th> Extension </th>
				</tr>
			</tfoot>
		</table>
	</div>
</body>
</html>