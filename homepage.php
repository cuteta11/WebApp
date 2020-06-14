<?php
	session_start();
	require_once('dbconfig/config.php');
	//phpinfo();
?>
<!DOCTYPE html>
<html>
<head>
<title>Home Page</title>
<link rel="stylesheet" href="css/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" href="https://www.navigus.in"><i class="fa fa-home"></i>NAVIGUS</i></a>
		</div>
	</nav>
	
	<div id="main-wrapper">
		<center><h2>Home Page</h2></center>
		<center><h3>Welcome </h3></center>
		
		<form action="index.php" method="post">
			<div class="imgcontainer">
				<img src="imgs/navigusbackground.png" alt="Avatar" class="avatar">
			</div>
			
			<div class="inner_container">
				<button class="logout_button" type="submit"><a href="logout.php"><i class="w3-jumbo w3-spin fa fa-home"></i>Log Out</a></button>	
			</div>
		</form>
	</div>	
		</div>
	</div>
</body>	

</html>