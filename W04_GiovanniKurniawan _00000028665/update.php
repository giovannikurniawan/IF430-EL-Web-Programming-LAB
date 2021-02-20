<?php
	$host = "localhost";
	$username="root";
	$dbname="week04";
	$password="";
	$db = new mysqli($host, $username, $password, $dbname);

	$NIM = $_POST['NIM'];
	$Nama_Depan = $_POST['Nama_Depan'];
	$Nama_Belakang = $_POST['Nama_Belakang'];
	$Prodi = $_POST['Prodi'];
	$Old_NIM =  $_POST['Old_NIM'];
	
	$query = "UPDATE data SET  
					NIM = '" .  $NIM . "',
					Nama_Depan = '" .  $Nama_Depan . "',
					Nama_Belakang = '" .  $Nama_Belakang . "',
					Prodi = '" .  $Prodi . "'
					WHERE NIM = '" . $Old_NIM . "'
				";
				
	$update = $db->query($query);
			echo mysqli_error($db);
			mysqli_close($db);
			
	header('Location: home.php');	
?>