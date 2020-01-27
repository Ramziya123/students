<?php
include '../config/connection.php';
include_once '../controller/Mycontroller.php';
include 'admin_header.php';
$varc=new Mycontroller();
$res2=$varc->a_viewstudent();
 
 ?>

<!------------------faculty list for superuser section starts------------------------->


<section class="margin_top"> 
	<div class="container margin_top">
		<div class="row">
		<div class="col-md-12">
		
		<div class="card-header text-center p-1 bg-info "><h2 class="text-white">STUDENTS</h2></div>
			
		</div>				
			<div class="col-md-12 mt-3">
				<div style="overflow-x:auto;">
				<table class="container-fluid table ">
				
				  
				  <thead>
					<tr>
					<th>Sl NO</th>
					<th>Reg No:</th>
				    <th>Name</th>
					<th>Department</th>
					<th>Year</th>
					<th>Semester</th>
          <th>E-mail</th>
          <th></th>
					
					
					</tr>
				  </thead>
				  <?php
				while($row=mysqli_fetch_assoc($res2))
					{	
 					?>
					  <tbody id="myTable">
					  <form method="POST">
						<tr>
						 <td><?php echo $row['id']; ?></td>
						<td><input type="text" name="regno" readonly value="<?php echo $row['regno']; ?>"></td>
						<td><?php echo $row['name']; ?></td>
						<td><?php echo $row['dep']; ?></td>
						<td><?php echo $row['year']; ?></td>
						<td><?php echo $row['sem']; ?></td>
            			<td><?php echo $row['email']; ?></td>
						<td><input type="submit" name='remove' class="form-control btn btn-danger" value="REMOVE"></td>
            			</a></td> 
						</form>
						</tr>
						<?php 
					}
					?>
				
					</tbody>
					
				
					<?php 
					if(isset($_POST['remove']))
					{
						$varc->removestudent($_POST['regno']);
					}
					?>


				</table>
			</div>
			</div>
		</div>
	</div>
</section>


<!----------------------------------------Footer Starts--------------------------------------------------->  
 
<?php include('footer.php');?>
<!----------------------------------------Footer End--------------------------------------------------->



