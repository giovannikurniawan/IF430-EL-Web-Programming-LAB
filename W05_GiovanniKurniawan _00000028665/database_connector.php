<?php

function getUser($email, $pwd, $query){
	$host = "localhost";
	$username = "root";
	$dbname ="week04";
	$password = "iloveyou3000";
	$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$stmt = $pdo->prepare($query);
    $stmt->execute();
	if($stmt->rowCount() <= 0){
		return false;
	}
	else{
		while ($row = $stmt->fetch())
		{
			$result = array();
			$result['email'] = $row['email'];
			$result['pass'] = $row['pass'];
			$result['salt'] = $row['salt'];
			$output[] = $result;
		}
		return $output;
	}
}
function getStudent(){
	$host = "localhost";
	$username = "root";
	$dbname ="student";
	$password = "";
	$db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$query = "SELECT * FROM student";
	$stmt = $db->prepare($query);
    $stmt->execute();	

	while($row = $stmt->fetch(\PDO::FETCH_ASSOC)){
		$item = array();
		$item["nim"] = $row['nim'];
		$item["namaDepan"] = $row['namaDepan'];
		$item["namaBelakang"] = $row['namaBelakang'];
		$item["prodi"] = $row['prodi'];
		$output[] = $item;
	}
	return $output;
}
?>