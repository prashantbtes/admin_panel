

<!DOCTYPE html>
<html>
<head>
 <title> DpEdit</title>
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
    <?php $name = $_GET['name']; 
  $mobile  = $_GET['mobile'];
  $email = $_GET['email'];
  $city = $_GET['city'];
  $id = $_GET['id'];
  ?>
 <form id="myform">
  <center> 
    <h2> Edit Your Detail </h2>
  </center>  
     <div class="form-group col-md-3 col-md-offset-5">
    <input type="text" name="name" id="name"class="form-control form-control-user" placeholder="Enter Full Name"><br> 
    <input type="text" name="mobile" id="mobile" class="form-control form-control-user" placeholder="Enter Your Mobile"><br>
    <input type="text" name="email" id="email" class="form-control form-control-user" placeholder="Enter Your Email"><br>
    <input type="text" name="city" id="city"class="form-control form-control-user" placeholder="Enter Your City"><br>
    <button class="col-md-4 col-md-offset-3 btn btn-primary" id="update" value="submit" name="submit"> UPDATE </button>


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
 $(document).ready(function(){
  
  $('#update').click(function(){ 

    var name = $('#name').val();
    var mobile = $('#mobile').val();
    var email = $('#email').val();
    var city = $('#city').val();
    var id = '<?php echo $id; ?>';
    
    $.ajax({
    url:'updateedit.php',
    type:'POST',
    data:{name:name,mobile:mobile,email:email,city:city,id:id},
   // alert(data);die;
    success: function(data){
      if (data=='success') {
        alert('data updated');
      }
      else{
        alert('data not updated');
      }
    }

    })
  });
  });

</script>
 </div></form></body>
</body>
</html>