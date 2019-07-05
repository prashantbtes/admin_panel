<?php
 include("connect.php");
 $sql="select * from deliveryboy";
 $res=mysqli_query($con,$sql);

 // $sql2="DELETE FROM deliveryboy WHERE id='$id'";
 // $res2 = mysqli_query($con,$sql);
 
 $result=mysqli_fetch_assoc($res);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Status Delivery Person </title>
 <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="">
   <meta name="author" content="">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
   	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <style type="text/css">
   </style>
 </head>

<body>
<div class="container"><br><br><br>
	<div id="status">
 <?php 
      if($result['available']=="0")
  {
   echo"<h2> Status: Not Available </h2>";
  }
 if ($result['available']=="1")
  {
    echo "<h2> Status:Available </h2>";
  }
	?>
		<br>
		 <br>
		  <br>
<center>
  <h2> Status Of delivery Boy </h2></center>
 <table class="table table-bordered">
 	<thead>
 		<tr>
 			<th scope="col">Id</th>
 			<th scope="col">Name</th>
 			<th scope="col">Mobile</th>
 			<th scope="col">Email</th>
 			<th scope="col">City</th>
 			<th scope="col">Status</th>
 			<th scope="col">Action</th>
 		</tr>	
</thead>
<tbody>
	<tr>
		<td scope="col"><?php echo $result['id'] ?></td>
		<td scope="col"><?php echo $result['name'] ?></td>
		<td scope="col"><?php echo $result['mobile'] ?></td>
		<td scope="col"><?php echo $result['email'] ?></td>
		<td scope="col"><?php echo $result['city'] ?>
		<input type="hidden" name="hdn" id="hdn" value="<?php echo $result['id'] ?>"></td>
	
 <td> <select class="table table-bordered col-md-3" name="available" id="available">
		<option value="1"
    <?php
       if($result['available']=='1')
        {
           echo"selected";
        }
        	?>
        	>Available </option>
		

		<option value="0"
	<?php
		if($result['available']=='0')
		{
				echo "selected";
		}
			?>
			>Not Available </option>
 	    </select>
 </td>
   <td scope="col">
<a href="dpedit.php"><button class="btn btn-primary" type="button" id="del_<?php echo $result['id'] ?>"> Edit </button></a>
    <button class="btn btn-danger delData" type="button" attr-id="<?php echo $result['id']; ?>" id="del_<?php echo $result['id'] ?>">Delete</button>
  

      <script>
      	$(document).ready(function()
      {
      		('#available').change(function()
      {
      			var available = $('#available').val();
      			var id = $('#hdn').val();
      			//alert('avl');die;
      		$.ajax({
      				url:'status.php',
      				type:'POST',
      				data:{id:id available:available},
      			    //success:function(data)
      			   
      				// {
      					// if (data=='success'){
      					// 	alert('data updated');
      					// }
      					// else {
      					// 	 alert('data updated');
      					// 	}
      					// ('#status').replaceWith(data);
      				}
      			})
      		})
      	// })
      	
      </script>
	   </td>
   	</tr>
  </tbody>
 </table>
 </div>
</div>
</body>
</html>