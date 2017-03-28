<?php
	session_start();
	if(isset($_SESSION['user'])){
		header('Location: ../nodues.php'); 
	}
?>
<html>
<head>
<title>
Log In
</title>
<link rel="stylesheet" href="logi.css"/>
</head>
<body>
<div class="main">
	<br><br><br>
	<h1 style="font-family:malgun gothic;color:#7878ff;">Dues Status</h1>
	<div class="formContainer">
		<form class="form" action="redirect.php" method="post">
			<div class="entry">
				<input class="input" id="usernameInput" type="text" placeholder="username" name="username" value=""></input>
			</div><br>
			<div class="entry">
				<input class="input" id="passwordInput" type="password" placeholder="password" name="password" value=""></input>
			</div><br>
			<input class="submit" id="submit" type="submit" value="login">
		</form>
	</div>
</div>
</body>
</html>