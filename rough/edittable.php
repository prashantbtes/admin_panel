<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title> Edit Table </title>`
</head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
   <body>
   	
  <form id="myform">
	<center>
		<h2> Edit Table </h2>
	</center><br>
	<center>
		 <div class="col-md-3 col-md-offset-5">
		 <!-- <div class="form-group col-lg-3"> -->
	     <input type="text" id="name" name="name" placeholder="name" class="form-control col-sm-5 mb-sm-2"><br><br><br>
		     <input type="text" id="email" name="email" placeholder="email"  class="form-control col-sm-5 mb-sm-2"><br><br><br>
		     <input type="text" id="mobile" name="mobile" placeholder="mobile"  class="form-control col-sm-5 mb-sm-2"><br><br><br>
		     <input type="password" id="password" name="password" placeholder="password"   class="form-control col-sm-5 mb-sm-2"><br><br><br>
            <button type="button" name="submit" id="form2" class="btn btn-secondary" > UPDATE </button>
            </div>
      </center>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
       <script>
      $(document).ready(function(){
      	$('#form2').click(function(){

      	 var id = $('#id').val();	          
      		var name = $('#name').val();
      		var email = $('#email').val();
      		var mobile = $('#mobile').val();
      		var password = $('#password').val();
      	 // var id = '<?php// echo $id; ?>';

      		$.ajax({
      			url:'editconnect.php',
      			type:'POST',
      			data:{
      				name:name,
      				email:email,
      				mobile:mobile,
      				password:password,
                id:id,},
      			
      				success:function(data){
      					if (data=='success'){
      						alert('data updated successfull');
      					}
      					else{
      						alert('data not updated');
      					}}

      		}) 
      	});
      });
 
      </script>
    </form>
   </body>
  </html>