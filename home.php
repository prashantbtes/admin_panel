<?php
	include("header.php");

	$id = $_SESSION['id'];
    $sql = "SELECT * FROM delperson where ID='$id'";
    $res = mysqli_query($conn, $sql);
    $result = mysqli_fetch_assoc($res);

 //    if(isset($_POST['submit']))
	// {
	// 	$dpname = $_POST['dpname'];
	// 	$dpid = $_POST['dpid'];
	// 	$user = $_POST['username'];
	// 	$email = $_POST['email'];
	// 	$age = $_POST['age'];
 //        $mobile = $_POST['mobile'];
 //        $lstate = $_POST['lstate'];
 //        $lcity = $_POST['lcity'];

	// 	$sql3 = "UPDATE delperson SET DP_Name='$dpname', DP_ID='$dpid', Username='$user', E_Mail='$email', Phone_No='$mobile', Age='$age', DP_State='$lstate', DP_City='$lcity' where ID=$id";
	// 	//print_r($sql3);die;
	// 	$res3 = mysqli_query($conn, $sql3);
	// }

?>
	 <div class="main-content-inner">
        <!-- sales report area start -->
        <div class="sales-report-area mx-1 mt-5 mb-5">
        	<div class="row my-2">
        		<h5 class="display-4"> Status </h5>
        		<div class="col-md-12 my-1">
	        		<div class="card bg-success">
	        			<div class="card-header">
	        				<h3 class="h3-responsive text-white"> Delivery Status </h3>
	        			</div>
	        			<div id="stts">
	        				<?php
								if($result['Available'] == "0")
								{
									echo "<div class='card-body bg-danger font-weight-bolder text-white'>";
									echo "<h5 class='h5-responsive'> On Delivery </h5>";
									echo "</div>";
								}
								if($result['Available'] == "1")
								{
									echo "<div class='card-body bg-primary font-weight-bolder text-white'>";
									echo "<h5 class='h5-responsive'> Available for delivery </h5>";
									echo "</div>";
								}		
							?>
						</div>
	        			<div class="card-footer bg-warning">
	        				<p> <a href="#table" class="text-dark"> Click here to see the details. </a></p>
	        			</div>
	        		</div>
	        	</div>
        	</div>
            <div class="row my-5">
                <div class="col-md-12">
                    <h5 class="display-4"> Edit </h5>
                </div>
                <div class="col-md-12 text-white text-center p-3">
                    <table class="table bg-info table-hover table-striped" id="table">
                    	<thead>
                    		<tr class="bg-primary">
                    			<th class="align-middle"> Name </th>
                    			<th class="align-middle"> ID </th>
                    			<th class="align-middle"> Username </th>
                    			<th class="align-middle"> Phone No. </th>
                    			<th class="align-middle"> City </th>
                    			<!-- <th class="align-middle"> Locality </th> -->
                    			<th class="align-middle"> Status </th>
                    			<!-- <th class="align-middle"> Action </th> -->
                    		</tr>
                    	</thead>
                    	<tbody>
                    		<tr>
                    			<td class="align-middle"> <?php echo $result['DP_Name'] ?></td>
                    			<td class="align-middle"> <?php echo $result['DP_ID'] ?></td>
                    			<td class="align-middle"> <?php echo $result['Username'] ?></td>
                    			<td class="align-middle"> <?php echo $result['Phone_No'] ?></td>
                    			<td class="align-middle"> <?php echo $result['DP_City'] ?> 
                    				<input type="hidden" name="hddn" id="hddn" value="<?php echo $result['ID'] ?>">
                    			</td>

                    			<!-- <td class="align-middle">
                    				<select class="form-control" name="local" id="local">
                    					<option value="" selected disabled> Choose a locality</option>
                    				</select>
                    			</td> -->
                    			<td class="align-middle">
                    				<select class="form-control" name="avail" id="avail">
                    					<option value="1" 
                    					<?php
                    						if($result['Available'] == '1') 
                    						{
                    							echo "selected";
                    						}
                    					 ?> > Available </option>
                    					<option value="0"
                    						<?php
                    						if($result['Available'] == '0') 
                    						{
                    							echo "selected";
                    						}
                    					 ?>
                    					 > Not Available </option>
                    				</select>
                    				<script>
                    					$(document).ready(function(){
                    						$('#avail').change(function(){
                									var avl = $('#avail').val();
                									var id = $('#hddn').val();
                									//alert(id);die;
                									//alert(avl);die;
                									$.ajax({
                										url:'avail.php',
                										type:'POST',
                										data: {id: id, avl: avl},
                										success:function(data)
                										{
                											('#stts').replaceWith(data);
                										}
                									})
                							})
                						})
                    				</script>
                    			</td>
                    			<!-- <td> <button type="button" name="update" id="update" class="btn btn-light"> Update </button> </td> -->
                    		</tr>
                    	</tbody>
                    	<tfoot>
                    		<tr>
                    			<td colspan="6">
                    				<button type="button" class="btn btn-light" name="del" id="del"> <a href="editprof.php?id=<?php echo $result['ID'] ?>"> Edit Profile </a></button>
                    				<!-- <script>
                    					$(document).ready(function(){
                    						$("#del").click(function(){
                    							alert(id);die;	
                    							$.ajax({
                    								url:'editprof.php',
                    								type:'POST',
                    								data: {id:id},
                    								success:function(data)
                    								{
                    									('#edit').replaceWith(data);
                    								}
                    							})
                    						})
                    					})
                    				</script> -->
                    			</td>
                    		</tr>
                    	</tfoot>
                    </table>
                </div>
                <div class="col-md-12">
                	<div class="col-md-12" id="edit">

                	</div>
                </div>
            </div>

          </div>
      </div>
	</div>

<?php
	include("footer.php");
?>
