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
</head>
<body>
	  <form id="myform">
 
<center>
	<h2> Temp Form </h2></center><br>
<center>
 <div class="form-group col-lg-3">
	     <input type="text" id="name" name="name" placeholder="name"  class="form-control col-sm-5 mb-sm-2"><br><br><br>
		     <input type="text" id="email" name="email" placeholder="email"  class="form-control col-sm-5 mb-sm-2"><br><br><br>
		     <input type="text" id="mobile" name="mobile" placeholder="mobile"  class="form-control col-sm-5 mb-sm-2"><br><br><br>
		     <input type="password" id="password" name="password" placeholder="password" class="form-control col-sm-5 mb-sm-2"><br><br><br>
           <!-- <input type="file" name="image" id="image" class="btn btn-primary"> <br><br> -->
            <button type="button" name="submit" id="form3" class="btn btn-secondary"> Submit </button>
         <a href="table.php"><button type="button" class="btn btn-secondary" href="table.php"> Go To Table </button></a>
            </div></center>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script type="text/javascript">
      	$(document).ready (function(){
      		$('#form3').click(function(){
      			var name = $('#name').val();
      			var email = $('#email').val();
      			var mobile = $('#mobile').val();
      		    var password = $('#password').val();
      		    //var image = $('#image').val();
      		   		$.ajax({
      		   			url:'insert.php',
      		   			type:'POST',
      		   			data:{ name:name,
      		   				email:email,
      		   				mobile:mobile,
      		   				password:password
      		   				},
      		   				success:function(data){
      		   					if(data='success'){
      		   						alert('data inserted successfully');
      		   					}
      		   					else {
      		   						alert('data not inserted');
      		   					}}
      		   				
      		   		})

      		   		});
      	});
      </script>
    </form>
   </body>
  </html>