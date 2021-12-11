<?php  
$mysqli = new mysqli("localhost","root","","stock");
$sql = "SELECT * FROM `repaired`";
$result = mysqli_query($mysqli,$sql);
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Print Preview</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<table class="table">
  <thead>
    <tr>
      <th scope="col">SL.NO</th>
      <th scope="col">Product Code</th>
      <th scope="col">Company Name</th>
      <th scope="col">Product Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Repair Date</th>
      <th scope="col">Repair Cost</th>
       
    </tr>
  </thead>
  <?php while($row=mysqli_fetch_assoc($result)){ ?>
  <tr>
      <td><?php echo $row['slno'];  ?></td>
      <td><?php echo $row['pcode']; ?></td>
      <td><?php echo $row['cname']; ?></td>
      <td><?php echo $row['pname']; ?></td>
      <td><?php echo $row['quantity']; ?></td>
      <td><?php echo $row['repairsentdate']; ?></td>
      <td><?php echo $row['repaircost']; ?></td>
      
  </tr>


<?php } ?>
  <tbody>
  </tbody>
</table>
<a href="repaired.php" class="btn btn-primary" title="CLICK TO GO BACK"><b>◄◄</b></a>
</body>
</html>