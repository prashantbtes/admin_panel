<?php
//define varibale
?><!DOCTYPE html>
<html>
<head>
	<title>Form</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
	  <form id="myform" action="insertphp.php" method="post" enctype="multipart/form-data">
<div class="container">
	<div class="col-lg-5">
		<div class="form-group">
		     <input type="text" name="name" placeholder="name"><br><br>
		     <input type="text" name="email" placeholder="name"><br><br>
		     <input type="text" name="mobile" placeholder="name"><br><br>
		     <input type="text" name="password" placeholder="name"><br><br>
            <button type="submit name="submit" class="btn btn-secondary"> Submit </button>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
          <script type="text/javascript">
          	 $(document).ready(function(){
        $('#form1').click(function(){ 
      var name = $('#name').val();
      var email = $('#email').val();
     var mobile = $('#mobile').val();
     var password = $('#password').val();
      
    $.ajax({
    url:'insertphp.php',
    type:'POST',
    data:{productname:productname,price:price,color:color,quantity:quantity,brand:brand,size:size},
   // alert(data);die;
    success: function(data){
      
    }

    })
  });

  });


          </script>


		</div></div></div>
</body>
</html>