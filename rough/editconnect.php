<?php 
$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'contactpk');
extract($_POST);
if(($_SERVER['REQUEST_METHOD'] == 'POST')){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$password = $_POST['password'];
	$id = $_POST['id'];
    
	$query = "UPDATE temp1 SET name='".$name."', email='".$email."', mobile='".$mobile."', password='".$password."' WHERE id='".$id."'"; 
{
if(mysqli_query($con, $query)){
	echo 'success';
	}
	else{
		echo 'error';
	}
}}
?>