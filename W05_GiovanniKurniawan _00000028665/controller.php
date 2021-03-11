<?php

include_once ('model.php');
include_once ('database_connector.php');
$invalid = false;
$login = false;
if(isset($_POST['email']) || isset($_POST['pwd'])){
		$pwd = htmlspecialchars($_POST['pwd']);
		$email = htmlspecialchars($_POST['email']);
		$query = "SELECT * FROM user WHERE email = '$email'";
		$result = getUser($email, $pwd, $query);
		if($result == true){
			foreach($result as $row){
				$md5 = md5($pwd.$row['salt']);
				if($row['pass'] == $md5){
					$login = true;
				}
			}
		}
}
	if($login){	
		$student = new Student();
		$output = $student->getData();
	}
	else if(isset($_POST['email']) || isset($_POST['pass'])){
		$invalid = true;
		$output = `[ { "nim": "", "namaDepan": "", "namaBelakang": "", "prodi": "" }]`;
	}
	else{
		$output = `[ { "nim": "", "namaDepan": "", "namaBelakang": "", "prodi": "" }]`;
	}
	include_once ('main.php');
?>