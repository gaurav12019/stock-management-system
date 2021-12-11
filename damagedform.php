<?php  
 if(isset($_POST['submit'])){
  $mysqli = new mysqli("localhost","root","","stock");
  extract($_POST);
 
  $sql = "INSERT INTO `damaged`(`slno`, `pcode`, `cname`, `pname`, `quantity`, `reportdate`)VALUES('$slno', '$pcode', '$cname', '$pname', '$quantity', '$reportdate')";
  if($mysqli->query($sql)){
     header("refresh:0");
  }else{
    echo $mysqli->error;
  }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>DAMAGED RECORD</title>
	<link rel="stylesheet" type="text/css" href="css/button.css">
  <style type="text/css">
    #modal-form{
       background: linear-gradient(to bottom right, #000000 -34%, #ffffcc 123%);

    }
  </style>
</head>
<body>
  
    
  <div class="box">
    <div id="id05" class="modal1">
  
        <form class="modal-content animate1" action="damaged.php" method="POST" id="modal-form" style="border-radius: 30px;">
            
                <span onclick="document.getElementById('id05').style.display='none'" class="close1" title="CLOSE">×</span><br>
               
           
  
            <div class="container1">
           <b> <label  style="color:black;"> <u> DAMAGED-STOCK-ENTRY</u></label></b><br>
       	<input type="text" name="slno" placeholder="SL.NO" required class="input"><br>
       	<input type="text" name="pcode" placeholder="PRODUCT CODE" required class="input"><br>
    		<input type="text" name="cname" placeholder="COMPANY NAME" required class="input"><br>
    		<input type="text" name="pname" placeholder="PRODUCT NAME" required class="input"><br>
        <input type="number" name="quantity" placeholder="QUANTITY" required class="input"><br>
        <label style="color:black;">Damaged Report Date:</label><br>
        <input type="date" name="reportdate" placeholder="DAMAGED DATE" required class="input"><br>
        
		<span><button class="button1" type="submit" name="submit">SUBMIT</button></span>
    

		
            </div>
  
            
                
            </div>
        </form>

  </div>
</body>

</html>