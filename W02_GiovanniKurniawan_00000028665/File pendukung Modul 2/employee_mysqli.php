<!DOCTYPE html>
<html>
<head>
		<title> Tugas Pendahuluan</title>

  		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
		<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
		<script type="text/javascript">
		 	$(document).ready(function() {
			    $('#products').DataTable();
			} );
		</script>

<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color:  #f2f2f2}

th {
  background-color: white;
  color: black;
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
                        <li class= "active" ><a href="#"> Products </a></li>
                    </ul>
                </div>
            </div>
        </nav>
	</header>
	<table>
	<div class="container">
		<table id="products" class="table table-stripped table-bordered" style="width:100%">
			<thead>
				<tr>
					<th>#</th>
					<th>Product Name</th>
					<th>Quantity per Unit</th>
					<th>Price</th>
					<th>Stock</th>
				</tr>
			</thead>
		<tbody>
			<?php 
				//Ini adalah lokasi dari mysql berada
				$host = "localhost";

				//Ini adalah user yang digunakan untuk login ke dalam module mysql / mariadb
				$username = "root";

				//Ini adalah nama database yang digunakan dalam praktikum ini 
				$dbname = "northwind";

				//Ini adalah password yang untuk autentikasi user
				$password = "";

				//Object database
				$db = new mysqli($host, $username, $password, $dbname);

				$query = "SELECT * FROM products LIMIT 77";
				$result = $db->query($query);

				while ($row = $result->fetch_assoc()) {
					echo "<tr>";
					echo "<td>" . $row['ProductID'] . "</td>";
					echo "<td>" . $row['ProductName'] . "</td>";
					echo "<td>" . $row['QuantityPerUnit'] . "</td>";
					echo "<td>" . $row['UnitPrice'] . "</td>";
					echo "<td>" . $row['UnitsInStock'] . "</td>";
				echo "</tr>";
				}

				mysqli_free_result($result);
				mysqli_close($db);
			 ?>
		</tbody>
		<tfoot>
			<tr>
				<th>#</th>
				<th>Product Name</th>
				<th>Quantity per Unit</th>
				<th>Price</th>
				<th>Stock</th>
			</tr>
		</tfoot>
	</table>

</body>
</html>