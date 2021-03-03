<?php
	$host = "localhost";
	$username="root";
	$dbname="week04";
	$password="";
	
	$db = new mysqli($host, $username, $password, $dbname);
		$q = "INSERT INTO student (NIM, Nama_Depan, Nama_Belakang, Prodi)
		VALUES 
			('".$_POST['NIM']."',
			 '".$_POST['Nama_Depan']."',
			 '".$_POST['Nama_Belakang']."',
			 '".$_POST['Prodi']."'
			 )";

	// echo $_POST['studentid'];
	// echo $_POST['first_name'];
	// echo $_POST['last_name'];
	// echo $_POST['description'];
		 
			$simpan = mysqli_query($db, $q);
				echo mysqli_error($db);
			
			header('Location: home.php');
?>