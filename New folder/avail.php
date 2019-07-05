<?php 
$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con,'contactpk');
extract($_POST);
if(($_SERVER['REQUEST_METHOD'] == 'POST')){
$id = $_POST['id'];
$available = $_POST['available'];

$query = "UPDATE deliveryboy SET available='$available' WHERE id='$id'";
if(mysqli_query($con, $query)){
	echo 'success';
}
else{
	echo 'error';
}
}

?>