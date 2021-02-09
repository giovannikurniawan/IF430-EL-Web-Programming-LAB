<!DOCTYPE html>
<html>
<head>
	<title> Tugas Pendahuluan</title>
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
		<thead>
			<tr>
				<th> # </th>
				<th> Product Name </th>
				<th> Quantity Per Unit </th>
				<th> Price </th>
				<th> Stock </th>
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

				//koneksi ke database via PDO
				$conn = new PDO("mysql:host='$host';dbname='$dbname';", $username, $password);

				$query = "SELECT * FROM products LIMIT 12";
				$result = $conn->query($query);

				foreach ($result as $row) {
				 echo "<tr>";
					echo "<tr>" . $row[0] . "</td>";
					echo "<tr>" . $row[1] . "</td>";
					echo "<tr>" . $row[2] . "</td>";
					echo "<tr>" . $row[3] . "</td>";
					echo "<tr>" . $row[4] . "</td>";
					echo "<tr>" . $row[5] . "</td>";
					echo "<tr>" . $row[6] . "</td>";
				echo "</tr>";
			}

			$result = null;
			$conn = null;
        ?>             		
		</tbody>
		<tfoot>
			<tr>
				<td> # </td>
				<td> Product Name </td>
				<td> Quantity Per Unit </td>
				<td> Price </td>
				<td> Stock </td>
			</tr>
		</tfoot>
	</table>
</body>
</html>