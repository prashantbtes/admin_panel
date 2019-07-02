<?php 
$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con,'contactpk');
extract($_POST);
$name = $_POST['name'];
$email	 = $_POST['email']; 
$mobile = $_POST['mobile'];
$password = $_POST['password'];

if(isset($_POST['submit'])){
	$q="insert into product (name,email,mobile,password) values ('$name','$email', '$mobile', '$password',)";
$query =mysqli_query($con,$q);
//echo $q;die;
header(('location:form.php'));


}



?>