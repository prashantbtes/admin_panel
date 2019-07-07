<?php
include ("insert.php");
$sql="select * from temp1";
$res=mysqli_query($con,$sql);
$result=mysqli_fetch_assoc($res);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Form1</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
	<form id="myform">
  <div class="col-md-6 col-md-offset-3">
  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >
 	<h2> Temporary Table  </h2>
 	<thead><tr>
 		<td> Id </td>
 		<td> Name </td>
 		<td> Email </td>
 		<td> Mobile </td>
 		<td> Password </td>
    <td> Action </td>
 	</tr></thead>
 	<tbody>
    <?php $i=1;
    while($result = mysqli_fetch_assoc($res))
    {
      ?>
     
 	<tr>
 		<td><?php echo $result['id'] ?></td>
 		<td><?php echo $result['name'] ?></td>
 		<td><?php echo $result['email'] ?></td>
 		<td><?php echo $result['mobile'] ?></td>
 		<td><?php echo $result['password'] ?> </td>
    <!-- <td><a href="edittable.php"?id=<?php //echo $i?> & name=<?php //echo $name?> & email=<?php //echo $email?> & mobile=<?php //echo $mobile?> & password=<?php //echo $password?>><button type="button" name="submit" id="submit" class="btn btn-primary">Edit </button></a></td> -->
     <td><a href="edittable.php"><button type="button" name="submit" id="submit" class="btn btn-primary">Edit </button></a></td> 
 	</tr>
  <?php
$i++;
}
while($i<$result=mysqli_fetch_assoc($res));
  ?>
      </tbody>
     </table>
    </div>
	 </form>
  </body>
 </html>