<?php
	session_start();
?>
<?php include("connect.php");?>
<!DOCTYPE html>
<html>
<head>
	<title>NAVBAR</title>
	<link rel="stylesheet" type="text/css" href="css/sidenavpannel.css">
	<link rel="stylesheet" type="text/css" href="css/homes.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content=
		"width=device-width, initial-scale=1.0">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>

</head>
<body>

	<nav>
		<div id="main">
  <button class="openbtn" onclick="openNav()" title="MENU">☰</button>  
  
</div>
		<div class="logo">
			📚STOCK-MANAGEMENT-SYSTEM
		</div>

		<div class="nav-items">

			<!-- The Menu items -->
			
			
			
			
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

	<div  id="mySidebar" class="sidebar">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
		 <br><br><h3 style="color:white;">ADMIN WORKSPACE</h3><br><br>
        
      <!-- Links in Div -->
      <a href="index.php">🏡&nbspHOME</a>
      <a href="adminpage.php">⏲&nbspDASHBOARD</a>
      <a href="display.php">📚&nbspNew Stock Entry</a>
      <a href="reused.php">📚&nbspReusable Stock Entry</a>
      <a href="repaired.php">📚&nbspRepaired Stock Entry</a>
      <a href="damaged.php">📚&nbspDamaged Stock Entry</a>
     

	</div>
	
<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
</body>
</html>
