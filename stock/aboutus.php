<!DOCTYPE html>
<html>
<head>
<style type="text/css">
 body{
 	
	}
</style>
</head>
<body style="background-image: url('image/2.jpg');">

	<h2>Modal Login Form</h2>
	<!--Step 1 : Adding HTML-->
	<!--<button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Login</button>-->

	

	<script>
		var modal = document.getElementById('id02');
		window.onclick = function(event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
		}
	</script>
</body>

</html>
