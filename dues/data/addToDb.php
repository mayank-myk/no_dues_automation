<?php
if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['type']) && $_POST['username']!="" && $_POST['password']!="" && ($_POST['type']=="authority" || $_POST['type']=="student" )){
	$conn = new mysqli('127.0.0.1', 'accounts', 'ZadBZ7', 'accounts');

	$newUser = $_POST['username'];
	$newPassword = $_POST['password'];
	$type = $_POST['type'];
	$hash = password_hash($newPassword,PASSWORD_BCRYPT);
	$conn->query("INSERT INTO logindata(Username,Password,Type) values('$newUser','$hash','$type')");
}
header('Location: editUsers.php');
?>