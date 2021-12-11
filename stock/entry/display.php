<?php  
$mysqli = new mysqli("localhost","root","","stock");
$sql = "SELECT * FROM `new`";
$result = mysqli_query($mysqli,$sql);
?>
<?php  

if(isset($_POST['update'])){
  extract($_POST);
  $sql = "UPDATE `new` SET `slno`='$slno', `pcode`='$pcode', `cname`='$cname', `pname`='$pname', `date`='$date', `quantity`='$quantity', `rate`='$rate' WHERE `id`='$update'";
  if($mysqli->query($sql)){
    echo "UPDATE SUCCESSFULL";
    header("refresh:0");
  }else{
    echo $mysqli->error;
  }
}

if(isset($_POST['delete'])){
  extract($_POST);
  $sql = "DELETE FROM `new` WHERE `id`='$delete'";
  if($mysqli->query($sql)){
    echo "DELETE SUCCESSFULL";
    header("refresh:0");
  }else{
    echo $mysqli->error;
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>NEW-STOCK-ENTRY</title>
  <link rel="stylesheet" type="text/css" href="button.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <?php include('sidenavbar.php');?>
  <label style="align-content: center;"><b><u>NEW STOCK RECORD</u></b></label>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<center><div style=" color: white;">
  <?php
include('index.php');
?>
   <button class="button1" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Enter Record</button> &nbsp&nbsp&nbsp&nbsp&nbsp
<button class="button1" 
    onclick="window.location.href = 'print.php';" style="width:auto;">
        Print Preview
    </button>  
</div></center>
<table class="table">

  <thead>
    <tr>
      <th scope="col">SL.NO</th>
      <th scope="col">Product Code</th>
      <th scope="col">Company Name</th>
      <th scope="col">Product Name</th>
      <th scope="col">Purchase Date</th>
      <th scope="col">Quantity</th>
      <th scope="col">Rate</th>
      <th scope="col">Update Record</th>
      <th scope="col">Delete Record</th>
    </tr>
  </thead>
  <?php while($row=mysqli_fetch_assoc($result)){ 
    ?>
  <tr>
      <td><?php echo $row['slno']; ?></td>
      <td><?php echo $row['pcode']; ?></td>
      <td><?php echo $row['cname']; ?></td>
      <td><?php echo $row['pname']; ?></td>
      <td><?php echo $row['date']; ?></td>
      <td><?php echo $row['quantity']; ?></td>
      <td><?php echo $row['rate']; ?></td>
      <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal-<?php echo $row['id'] ?>"  style="color:white; width:auto;"><b><i class="fa fa-refresh"></i></b>
</button>

<div class="modal fade" id="exampleModal-<?php echo $row['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-<?php echo $row['id'] ?>" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel-<?php echo $row['id'] ?>">UPDATE RECORD</h5>
        <button type="button" style="width: auto;" class="close" data-dismiss="modal" aria-label="Close" title="Click To CLOSE">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="display.php" method="POST">
      <div class="modal-body">
 <div class="form-group">
    <label>SL.NO</label>
    <input type="text" class="form-control" name="slno" id="slno-<?php echo $row['id'] ?>" value="<?php echo $row['slno']; ?>" >
       
  </div>
 
  <div class="form-group">
    <label>Product Code</label>
    <input type="text" class="form-control" name="pcode" id="pcode-<?php echo $row['id'] ?>" value="<?php echo $row['pcode']; ?>" >
    
  </div>
 <div class="form-group">
    <label>Company Name</label>
    <input type="text" class="form-control" name="cname" id="cname-<?php echo $row['id'] ?>" value="<?php echo $row['cname']; ?>" >
    
  </div>
  <div class="form-group">
    <label>Product Name</label>
    <input type="text" class="form-control" name="pname" id="pname-<?php echo $row['id'] ?>" value="<?php echo $row['pname']; ?>" >
    
  </div>
  <div class="form-group">
    <label>Purchase Date</label>
    <input type="date" class="form-control" name="date" id="date-<?php echo $row['id'] ?>" value="<?php echo $row['date']; ?>" >
    
  </div>
   <div class="form-group">
    <label>Quantity</label>
    <input type="number" class="form-control" name="quantity" id="quantity-<?php echo $row['id'] ?>" value="<?php echo $row['quantity']; ?>" >
    
  </div>
   <div class="form-group">
    <label>Rate</label>
    <input type="number" class="form-control" name="rate" id="rate-<?php echo $row['id'] ?>" value="<?php echo $row['rate']; ?>" >
    
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" value="<?php echo $row['id']; ?>" name="update" class="btn btn-primary">Update</button>
      </div>
    </div>
  </div>
</form>
</div>


</td>
<form action="display.php" method="POST">
      <td><button type="submit" name="delete" id="delete" value="<?php echo $row['id']; ?>" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="width: auto;">
<b><i class="fa fa-trash" style="color:white; width:auto;"></i></b>
</button>
</form>
</td>

    </tr>
<?php } ?>
  <tbody>
  </tbody>
</table>
<a href="#" class="btn btn-primary"><b>Click To Go Back</b></a>
<script>
        var modal = document.getElementById('id01');
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>
</html>