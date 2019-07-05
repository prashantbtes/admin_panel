<?php 
$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con,'contactpk');
extract($_POST);
if(($_SERVER['REQUEST_METHOD'] == 'POST')){
$name = $_POST['name'];
$email	 = $_POST['email']; 
$mobile = $_POST['mobile'];
$city = $_POST['city'];
$id = $_POST['id'];

$query = "UPDATE deliveryboy SET name='".$name."', email='".$email."', mobile='".$mobile."',  city='".$city."', WHERE id='$id'";
if(mysqli_query($con, $query)){
	echo 'success';
}
else{
	echo 'error';
}
}

?>