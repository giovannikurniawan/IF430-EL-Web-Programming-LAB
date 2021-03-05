<?php
	//didalam tag tbody
	$host = "localhost";
	$username = "root";
	$dbname = "student";
	$password = "";
	
	$db = new mysqli($host, $username, $password, $dbname);
	
	$q = "INSERT INTO student (NIM, Nama_Depan, Nama_Belakang, Prodi)
			VALUES 
			('".$_POST['id']."',
			 '".$_POST['firstName']."',
			 '".$_POST['lastName']."',
			 '".$_POST['description']."'
			 )";
		 
			$simpan = mysqli_query($db, $q);
				echo mysqli_error($db);
				echo $simpan;
			
			header('Location: tugas.php');
	//returning response in JSON format
	echo json_encode($data);
?>