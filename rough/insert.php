<?php 
$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con,'contactpk');
extract($_POST);
if(($_SERVER['REQUEST_METHOD'] == 'POST')){
$name = $_POST['name'];
$email	 = $_POST['email']; 
$mobile = $_POST['mobile'];
$password = $_POST['password'];
//$image = $_POST['#image'];

$query = "INSERT INTO temp1 (name, email, mobile, password) VALUES('$name','$email','$mobile','$password' )";
if(mysqli_query($con, $query)){
	echo 'success';
}
else{
	echo 'error';
}
}

?>