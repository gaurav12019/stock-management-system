<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="utf-8">

	<!-- Linking the stylesheet -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Linking the Jquery script -->
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

	<script>
		$(document).ready(function() {
			$(".fa-search").click(function() {
				$(".icon").toggleClass("active");
				$("input[type='text']").toggleClass("active");
			});
		});
	</script>

	<meta name="viewport" content=
		"width=device-width, initial-scale=1.0">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>

	<style>

		/* Importing the fonts */
		@import url(
'https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700&display=swap');
		* {
			margin: 0;
			padding: 0;
			outline: none;
			box-sizing: border-box;
			font-family: 'Montserrat', sans-serif;
		}

		/* Body of the page */
		body {
			background: #f2f2f2;
		}

		/* Styling all the elements in nav as a whole */
		nav {
			background: #023047;
			display: flex;
			flex-wrap: wrap;
			align-items: center;
			justify-content: space-between;
			height: 70px;
			padding: 0 100px;
		}

		/* Styling the logo */
		nav .logo {
			color: #fff;
			font-size: 30px;
			font-weight: 600;
			letter-spacing: -1px;
		}

		/* Styling all the nav items as a whole */
		nav .nav-items {
			display: flex;
			flex: 1;
			padding: 0 0 0 200px;
		}

		/* Styling the list items in the nav tag */
		nav .nav-items li {
			list-style: none;
			padding: 0 10px;
		}

		/* Styling each list items */
		nav .nav-items li a {
			color: #fff;
			font-size: 15px;
			font-weight: 500;
			text-decoration: none;
		}

		/* Setting the hover colour on the list items*/
		
		nav .nav-items li a:hover {
			color: #19191b;
		}
		
		nav .searchbar {
			position: relative;
		}

		/* Styling the search box where the
			input would be given */
		nav .searchbar input[type="text"] {
			border: 0;
			padding: 0;
			width: 0px;
			height: 35px;
			border-radius: 3px;
			transition: all 0.3s ease;
		}

		/* Styling the search bar icon */
		nav .searchbar .icon {
			display: flex;
			position: absolute;
			top: 0;
			right: 0;
			width: 35px;
			height: 100%;
			background: none;
			border-radius: 3px;
			color: #fff;
			transition: all 0.5s 0.3s ease;
		}
		
		nav .searchbar .icon i {
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			cursor: pointer;
		}
		
		nav .searchbar .icon.active {
			background: #062333;
			transition: all 0.3s ease;
		}
		
		nav .searchbar input[type="text"].active {
			width: 250px;
			padding: 0 10px;
			transition: all 0.5s 0.2s ease;
		}
		
		nav .licon li {
			list-style: none;
			display: flex;
		}
		
		nav .licon li a {
			padding: 0 20px;
		}

		/* Changing the colour of the login
			icon when hovered over*/
		
		.fa-user-circle:hover {
			color: #0e0d0d !important;
		}
	</style>
</head>

<body>
	<nav>
		<div class="logo">
			NEW STOCK RECORD
		</div>

		<div class="nav-items">

			<!-- The Menu items -->
			<li><a href="#">HOME</a></li>
			<li><a href="#">ABOUT US</a></li>
			
			
		</div>

		<!-- Defining the search bars -->
		<div class="searchbar">
			<input type="text" placeholder="search">
			<div class="icon">
				<i class="fas fa-search"></i>
			</div>
		</div>

		<!-- Defining the login button -->
		<div class="licon">
			<li>
				<a href="#" title="LOGOUT">
					<i class="fas fa-user-circle
						fa-2x" style="color: white;">
					</i>
				</a>
			</li>
		</div>
	</nav>
</body>

</html>
