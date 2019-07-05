<?php
include('connect.php');
if (isset($_POST['submit']))
{
  $email = $_POST['email'];
  $password=$_POST['password'];


  $sql ="select * from deliveryboy";
  $res = mysqli_query($con,$sql);

  while ($result = mysqli_fetch_assoc($res))
    {
      if($email == $result['email']) 
      {
        if ($password == $result['password'])
        { 
          session_start();
          $_SESSION['id']=$result['id'];
          $_SESSION['name']=$result['name'];
          $_SESSION['image']=$result['image'];
          if(isset($_SESSION['id'])!="")
          { 
            header('location:index.php');
          }
        }
      }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign In</title>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="">
   <meta name="author" content="">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
   <style type="text/css"></style>
</head>
<body class="bg-gradient-primary">
	<br><br>
  <form method="post" enctype="multipart/form-data">
	<center>
	<h2 class="col-md-3 col-md-offset-5"> Sign In </h2>
	</center><br>
    
	<div class="form-group col-md-3 col-md-offset-5">
	<input type="text" name="email" class="form-control form-control-user" placeholder="Enter Your Email"><br>
	<input type="text" name="password" class="form-control form-control-user" placeholder="Enter Password"><br>
	 <!-- <div class="form-group"> -->
          <div class="custom-control custom-checkbox control ">
            <input type="checkbox" class="custom-control-input" id="customCheck">
             <label class="custom-control-label" for="customCheck">Remember Me</label>
              </div>
             <!-- </div> -->
	<button type="submit" name="submit" class="col-md-3 col-md-offset-2 btn btn-primary btn-user">Sign In</button> 
	</div>	


</body>
</html>