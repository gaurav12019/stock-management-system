<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="utf-8">

	<!-- Linking the stylesheet -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/homes.css">
	<link rel="stylesheet" type="text/css" href="css/sidebar.css">
	<meta name="viewport" content=
		"width=device-width, initial-scale=1.0">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>

</head>

<body>
	
	<nav>
		<div class="logo">
			📚STOCK-MANAGEMENT-SYSTEM
		</div>

		<div class="nav-items">

			<!-- The Menu items -->
			
			<li><a href="#">Welcome Admin!! Your Data is ready to view</a></li>
			
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
	

	<?php include('graph.php');?>
	<div class="sidebar" id="sidebar">
      <!-- Div Header-->
      <br><br><h3>ADMIN WORKSPACE</h3><br><br>
        
      <!-- Links in Div -->
      <a href="index.php"><b>🏡</b>&nbspHOME</a>
      <a href="adminpage.php"><b>⏲</b>&nbspDASHBOARD</a>
      <a href="display.php"><b>📚</b>&nbspNew Stock Entry</a>
      <a href="reused.php"><b>📚</b>&nbspReusable Stock Entry</a>
      <a href="repaired.php"><b>📚</b>&nbspRepaired Stock Entry</a>
      <a href="damaged.php"><b>📚</b>&nbspDamaged Stock Entry</a>
      <br><br><br><br><br><br><br><br><a href="#"></a>
    </div>
	<div>


	<?php include("footer.php");?>
</div>
</body>

</html>
