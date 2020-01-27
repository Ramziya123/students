<?php
include '../config/connection.php';
include_once '../controller/Mycontroller.php';
include 'faculty_header.php';
$varw=new Mycontroller();
$resw=$varw->f_viewassess();
 
 ?>

<!------------------faculty list for superuser section starts------------------------->


<section class="margin_top"> 
	<div class="container margin_top">
		<div class="row">
		<div class="col-md-12">
		
		<div class="card-header text-center p-1 bg-info "><h2 class="text-white">ASSESSMENTS</h2></div>
			
		</div>				
			<div class="col-md-12 mt-3">
				<div style="overflow-x:auto;">
				<table class="container-fluid table ">
				
				  
				  <thead>
					<tr>
					<th>Sl NO</th>
					<th>Reg No:</th>
				    <th>Student Name</th>
					<th>Department</th>
					<th>Semester</th>
                    <th>Subject</th>
					<th>Mark</th>
                    <th>Total</th>
					
					
					</tr>
				  </thead>
				  <?php
				while($row=mysqli_fetch_assoc($resw))
					{	
 					?>
					  <tbody id="myTable">
					  
						<tr>
						 <td><?php echo $row['slno']; ?></td>
						<td><?php echo $row['regno']; ?></td>
						<td><?php echo $row['s_name']; ?></td>
						<td><?php echo $row['dep']; ?></td>
						<td><?php echo $row['sem']; ?></td>
						<td><?php echo $row['subject']; ?></td>
						<td><?php echo $row['mark']; ?></td>
                        <td><?php echo $row['total']; ?></td>
						
						</tr>
				
					</tbody>
					
					<?php 
					}
					?>

				</table>
			</div>
			</div>
		</div>
	</div>
</section>
<div class="col-md-3 ">
	<button type="clear" class="btn btn-danger"><a href="addassessment.php" class="text-light text-decoration-none">Add New+</a></button>
</div>

<!----------------------------------------Footer Starts--------------------------------------------------->  
 
<?php include('footer.php');?>
<!----------------------------------------Footer End--------------------------------------------------->



