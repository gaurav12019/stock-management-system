<?php
include_once('connect.php');
function test_input($data) {
  
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if ($_SERVER["REQUEST_METHOD"]== "POST") {
  
  $adminname = test_input($_POST["adminname"]);
  $password = test_input($_POST["password"]);
  $stmt = $conn->prepare("SELECT * FROM admin");
  $stmt->execute();
  $users = $stmt->fetchAll();
  
  foreach($users as $user) {
    
    if(($user['adminname'] == $adminname) &&
      ($user['password'] == $password)) 
    	
    { 
        header("Location: adminpage.php");
    }
    else {
      
      
       header("Location: login.php");

    }
  }
}

?>