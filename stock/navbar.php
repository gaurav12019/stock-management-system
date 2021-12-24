<?php
	session_start();
?>
<?php include("connect.php");?>
<!DOCTYPE html>
<html>
<head>
	<title>NAVBAR</title>
	<link rel="stylesheet" type="text/css" href="css/homes.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content=
		"width=device-width, initial-scale=1.0">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>

</head>
<body >

	<nav >
		<div class="logo" >
			STOCK-MANAGEMENT-SYSTEM
		</div>

		<div class="nav-items">

			<!-- The Menu items -->
			<li><a href="index.php">🏡HOME</a></li>
			
			
			
		</div>

		
		<!-- Defining the login button -->
		<div class="licon">
			<li>
				<a href="logout.php" title="LOGOUT">
					<i class="fas fa-user-circle
						fa-2x" style="color: white;">
					</i>
				</a>
			</li>
		</div>
	</nav>

	
</body>
</html>
