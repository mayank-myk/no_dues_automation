<html>
<head></head>
<body>
<form action="addToDb.php" method="POST">
<input type = "text" placeholder="Username" name="username"></input>
<input type = "text" placeholder="Password" value="root" name="password"></input>
<input type = "text" placeholder="Type" value="authority" name="type"></input>
<input type="submit"></input>
</form>
<form action="delFromDb.php" method="POST">
<input type="text" name="user" placeholder="username"></input>
<input type="submit"></input>
</form>
<?php
	$conn = new mysqli('127.0.0.1', 'accounts', 'ZadBZ7', 'accounts');
	$results = $conn->query("SELECT * FROM logindata");
echo "Database:<br>Username &nbsp&nbspPassword<br><hr>";
while($row = $results->fetch_assoc()){
	echo "<br>".$row['Username']."&nbsp&nbsp&nbsp-&nbsp&nbsp&nbsp ".$row['Password']." &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp...&nbsp&nbsp&nbsp(".$row['Type'].")";
}

?>
</body>
</html>