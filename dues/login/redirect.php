<?php
if(isset($_POST['username']) && isset($_POST['password']) && $_POST['username']!=NULL && $_POST['password']!=NULL){
	$person = $_POST['username'];
	$key = $_POST['password'];
	$validLogin = false;
	$conn = new mysqli('127.0.0.1','accounts','ZadBZ7','accounts');
	$result = $conn->query("SELECT * FROM logindata");
	while($row = $result->fetch_assoc()){
		if($row['Username']==$person){
			if(password_verify($key,$row['Password'])){
				$validLogin=true;
				$type = $row['Type'];
			}
		}
	}
	if($validLogin){
		echo "logged in";
		setcookie('username',$person,time()+60*60);
		session_start();
		$_SESSION['user'] = $person; 
		$_SESSION['type'] = $type;
		header('Location: ../dues.php');
	}else{
		echo 'Unknown User or Password <a href="index.php">Go to login page</a>';	
	}
}else{
	echo 'Unknown User or Password <a href="index.php">Go to login page</a>';	
}
?>	