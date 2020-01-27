<?php
include '../config/connection.php';
include_once '../controller/Mycontroller.php';
include 'student_header.php';
$varb=new Mycontroller();
$res1=$varb->a_viewnotice();
 
 ?>

<!------------------faculty list for superuser section starts------------------------->


<section class="margin_top"> 
	<div class="container margin_top">
		<div class="row">
		<div class="col-md-12">
		
		<div class="card-header text-center p-1  "><h2>NOTICES</h2></div>
			
		</div>				
			<div class="col-md-12 mt-3">
				<div style="overflow-x:auto;">
				<table class="container-fluid table table-bordered ">
				
				  
				  <thead>
					<tr class="table-success">
					<th>Sl NO</th>
					<th>Notice Id</th>
				    <th>Title</th>
					<th>Start Date</th>
					<th>End Date</th>
					<th>Description</th>
					</tr>
				  </thead>
				  <?php
				while($row=mysqli_fetch_assoc($res1))
					{	
 					?>
					  <tbody id="myTable">
					  
						<tr>
						 <td><?php echo $row['slno']; ?></td>
						<td><?php echo $row['n_id']; ?></td>
						<td><?php echo $row['title']; ?></td>
						<td><?php echo $row['s_date']; ?></td>
						<td><?php echo $row['e_date']; ?></td>
						<td><?php echo $row['descp']; ?></td>
						  
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


<!----------------------------------------Footer Starts--------------------------------------------------->  
 
<?php include('footer.php');?>
<!----------------------------------------Footer End--------------------------------------------------->



