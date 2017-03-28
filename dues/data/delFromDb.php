<?php
if(isset($_POST['user']) && $_POST['user']!=""){
	$conn = new mysqli('127.0.0.1', 'accounts', 'ZadBZ7', 'accounts');
	$conn->query("DELETE FROM logindata WHERE Username='$_POST[user]'");
}
header('Location: editUsers.php');
?>