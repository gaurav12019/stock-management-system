<?php
	session_start();
?>
<?php include('connect.php');?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="utf-8">

	<!-- Linking the stylesheet -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="css/homes.css">
	<link rel="stylesheet" type="text/css" href="css/aboutus.css">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>

	<style>
			.dhsk img{background-repeat: no-repeat;
						width: 100%;
						height: 100px;

			}
			.links{
				margin: auto;
			}
			.links a{
				text-decoration: none;
				float:left;
			}
			nav{
				background: #141E30;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #243B55, #141E30);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #243B55, #141E30); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


			}
	
	</style>
</head>

<body class="body">
	
	<nav>
		<div class="logo">
			📚STOCK-MANAGEMENT-SYSTEM
		</div>

		<div class="nav-items">

			<!-- The Menu items -->
			<li><a href="index.php">🏡HOME</a></li>
			<li><button onclick="document.getElementById('id02').style.display='block'" id='btn-1' title="View to Know Us">ABOUT US</button></li>
			
			<script type="text/javascript">
				document.getElementById("id02").disabled = true;
			</script>
		</div>

		
		<!-- Defining the login button -->
		<div class="licon">
			<li>
				<a href="login.php" title="LOGIN">
					<i class="fas fa-user-circle
						fa-2x" style="color: white;">
					</i>
				</a>
			</li>
		</div>
	</nav>

	
<div class="example">
	<img src="image/11.jpg">
	<div class="example1" style="background-color: transparent; color: white;">
  <div class="slide" style="max-width:auto; position: fixed; top:16%; left:5.5%;">
  <img class="mySlides" src="image/5.jpg" style="width:94%; height: 200px; box-shadow: 1px 1px 3px 1px; border-radius: 5px;">
  <img class="mySlides" src="image/4.jpg" style="width:102%; height: 200px; box-shadow: 1px 1px 3px 1px; border-radius: 5px;">
  <img class="mySlides" src="image/7.jpg" style="width:94%; height: 200px;box-shadow: 1px 1px 3px 1px; border-radius: 5px;">
   <img class="mySlides" src="image/6.jpg" style="width:115%; height: 200px;box-shadow: 1px 1px 3px 1px; border-radius: 5px;">
</div>
</div>
</div>
	<div>
	<?php include("footer.php");?>
</div>
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 3000); // Change image every 2 seconds
}

var modal = document.getElementById('id02');
		window.onclick = function(event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
		}
</script>
<div id="id02" class="modal">

		<div class="modal-content animate"  id="form-content" style="background-color: #f0efeb;">
			<div class="imgcontainer">
				<span onclick="document.getElementById('id02').style.display='none'" class="close" title="CLOSE">×
				</span>
			
			<div class="dhsk" ><img src="image/44.png">
			<h3>ABOUT US</h3>
			<h6>--------------------</h6>
			<div class="links">	
			<a href="https://dhsk.org/about-us/">->History Of DHSK COLLEGE</a><br><br>
			<a href="https://dhsk.org/about-us/objectives/">->Objectives & Vision</a>
				</div>
			</div><br><br><br><br><br><br><br><br><br>

			
		</div>
	</div>
</body>

</html>
