<?php  
$mysqli = new mysqli("localhost","root","","stock");
$sql = "SELECT * FROM `repaired`";
$result = mysqli_query($mysqli,$sql);
?>
<?php  

if(isset($_POST['update'])){
  extract($_POST);
  $sql = "UPDATE `repaired` SET `slno`='$slno', `pcode`='$pcode', `cname`='$cname', `pname`='$pname', `quantity`='$quantity', `repairsentdate`='$repairsentdate', `repaircost`='$repaircost' WHERE `id`='$update'";
  if($mysqli->query($sql)){
    echo "UPDATE SUCCESSFULL";
    header("refresh:0");
  }else{
    echo $mysqli->error;
  }
}

if(isset($_POST['delete'])){
  extract($_POST);
  $sql = "DELETE FROM `repaired` WHERE `id`='$delete'";
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
  <title>REPAIRED-STOCK-ENTRY</title>
  <link rel="stylesheet" type="text/css" href="css/search.css">
  <link rel="stylesheet" type="text/css" href="css/button.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <?php include('sidenavbar.php');?>
  <h3><b><u>REPAIRED STOCK RECORD&nbsp<input type="text" id="myInput" onkeyup="myFunction()" placeholder="🔍Search your data..." title="Type in a name"></u></b></h3>
  
 
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<center><div style=" color: white;">
  <?php
include('repairedform.php');
?>
   <button class="button1" onclick="document.getElementById('id04').style.display='block'" style="width:auto;">Enter Record</button> &nbsp&nbsp&nbsp&nbsp&nbsp
<button class="button1" 
    onclick="window.location.href = 'repairedprint.php';" style="width:auto;">
        Print Preview
    </button>  
</div></center>
<table class="table" id="table">

  <thead>
    <tr>
      <th scope="col">SL.NO</th>
      <th scope="col">Product Code</th>
      <th scope="col">Company Name</th>
      <th scope="col">Product Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Repair Date</th>
      <th scope="col">Repair Cost</th>
      <th scope="col">Update Record</th>
      <th scope="col">Delete Record</th>
    </tr>
  </thead>
  <?php while($row=mysqli_fetch_assoc($result)){ 

    ?>

  <tr>
      <td><?php echo $row['slno'];  ?></td>
      <td><?php echo $row['pcode']; ?></td>
      <td><?php echo $row['cname']; ?></td>
      <td><?php echo $row['pname']; ?></td>
      <td><?php echo $row['quantity']; ?></td>
      <td><?php echo $row['repairsentdate']; ?></td>
      <td><?php echo $row['repaircost']; ?></td>
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
      <form action="repaired.php" method="POST">
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
    <label>Quantity</label>
    <input type="number" class="form-control" name="quantity" id="quantity-<?php echo $row['id'] ?>" value="<?php echo $row['quantity']; ?>" >
    
  </div>
  <div class="form-group">
    <label>Repair Date</label>
    <input type="date" class="form-control" name="repairsentdate" id="repairsentdate-<?php echo $row['id'] ?>" value="<?php echo $row['repairsentdate']; ?>" >
    
  </div>
   
   <div class="form-group">
    <label>Repair Cost</label>
    <input type="number" class="form-control" name="repaircost" id="repaircost-<?php echo $row['id'] ?>" value="<?php echo $row['repaircost']; ?>" >
    
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
<form action="repaired.php" method="POST">
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

<script>
  //form box
        var modal = document.getElementById('id04');
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
  //Search bar
  function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("table");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
//SORT TABLE

</script>
</body>
</html>