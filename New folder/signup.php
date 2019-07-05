<?php
include("connect.php");
//define variable
$name = $mobile = $email = $city = $district = $state ="";
 if(isset($_POST['submit']))
 {
 	$name=$_POST['name'];
 	$mobile=$_POST['mobile'];
 	$email=$_POST['email'];
 	$password=$_POST['password'];
 	$city=$_POST['city'];
 	$district=$_POST['district'];
 	$state=$_POST['state'];
 	
 
 // if(!empty($_FILES['image']['name']))
 //   {
 //      $name1 =time()."_". $_FILES['image']['name'];
 //      $tmp_name = $_FILES['image']['tmp_name'];
 //      $path = "../uploads/".$name1;
 //      move_uploaded_file($tmp_name,$path); 
 //    }

$sql ="insert into deliveryboy (name,mobile,email,password,city,district,state) values ('$name','$mobile','$email','$password','$city','$district','$state')";
$res=mysqli_query($con,$sql);
if($res){
	echo "sucessfull";
}
else{
	echo "error";
}
}
?>
<!DOCTYPE html>
<html>
<head>
 <title> Sign UP</title>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="">
   <meta name="author" content="">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
   <style type="text/css"></style>
   </head>

<body>
 <form method="post" enctype="multipart/form-data">
      <center> 
     <h2> Register Here </h2><br>
   </center>
     <div class="form-group col-md-3 col-md-offset-5">
    <input type="text" name="name" class="form-control form-control-user" placeholder="Enter Full Name"><br> 
    <input type="text" name="mobile" class="form-control form-control-user" placeholder="Enter Your Mobile"><br>
    <input type="text" name="email" class="form-control form-control-user" placeholder="Enter Your Email"><br>
    <input type="text" name="password" class="form-control form-control-user" placeholder="Enter Password"><br>
    <input type="text" name="city" class="form-control form-control-user" placeholder="Enter Your City"><br>
    <input type="text" name="district" class="form-control form-control-user" placeholder="Enter Your District"><br>
    <input type="text" name="state" class="form-control form-control-user" placeholder="Enter Your State"><br>
    <input type="file" name="image" class="col-md-12 "><br><br>
   <a href="signin.php"> <button type="submit" name="submit" class="col-md-4 col-md-offset-3 btn btn-primary">SignUp</button></a>
   </div></form>


</body>
</html>