<?php
	$host = "localhost";
	$username="root";
	$dbname="week04";
	$password="";
	$db = new mysqli($host, $username, $password, $dbname);
	$studentid = $_POST['NIM'];
	
	$query = "DELETE FROM student WHERE NIM = $NIM";
	
	$delete = mysqli_query($db, $query);
	echo mysqli_error($db);
	echo $delete;
	
	header('Location: home.php');
?>
	