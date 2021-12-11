<?php
include("connect.php");
include("validatelogin.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/login.css">
  <style type="text/css">
    .background{
      background-image: url("image/16.jpg");
      background-repeat: no-repeat;
      width:100%;
       height: 300px;
       margin: 0px;
       padding: 0px;
  
    }
    .boxlogin
    {
      height: 350px;
  width: 500px;
  background-color: black;
  border-radius: 20px;
  margin: 140px auto;
  opacity: .8;
  color: white;
  padding: 20px;
    }
  </style>
  <title>ADMIN LOGIN</title>
</head>
<?php include('navbar.php');?>
<body class="background">
  
  
  <div >
  
  <div class="boxlogin">
  <form action="login.php" method="post">
    <div class="login-box" style="width:30%; color: red; padding:10px 20px 10px 20px;  border-radius: 10px; border-color: black;">
      <h1>ADMIN</h1>

      <div class="textbox">
        <i class="fa fa-user" aria-hidden="true"></i>
        <input type="text" placeholder="ADMIN_ID"
            name="adminname" value="" required="FIILLL" style="color: white">
      </div>

      <div class="textbox">
        <i class="fa fa-lock" aria-hidden="true"></i>
        <input type="password" placeholder="PASSWORD"
            name="password" value="" required  style="color: white">
      </div>

      <input class="button" type="submit"
          name="login" value="LOGIN" style="background: #283048;  
background: -webkit-linear-gradient(to right, #859398, #283048);  
background: linear-gradient(to right, #859398, #283048);">
    </div>
  </form>
</div>
</div>
</body>

</html>
