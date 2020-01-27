<?php
include '../config/connection.php';
include_once '../controller/Mycontroller.php';
include 'admin_header.php';
$varb=new Mycontroller();
$res1=$varb->a_viewfaculty();
 
 ?>

<!------------------faculty list for superuser section starts------------------------->


<section class="margin_top"> 
	<div class="container margin_top">
		<div class="row">
		<div class="col-md-12">
		
		<div class="card-header text-center p-1 bg-info "><h2 class="text-white">FACULTIES</h2></div>
			
		</div>				
			<div class="col-md-12 mt-3">
				<div style="overflow-x:auto;">
				<table class="container-fluid table ">
				
				  
				  <thead>
					<tr>
					<th>Sl NO</th>
					<th>Facylty Id</th>
				    <th>Name</th>
					<th>Qualification</th>
					<th>Department</th>
					<th>Mobile</th>
					<th>E-mail</th>
					<th></th>
					
					</tr>
				  </thead>
				  <?php
				while($row=mysqli_fetch_assoc($res1))
					{	
 					?>
					  <tbody id="myTable">
					  
						<tr>
						 <td><?php echo $row['id']; ?></td>
						<td><?php echo $row['f_id']; ?></td>
						<td><?php echo $row['f_name']; ?></td>
						<td><?php echo $row['f_qualification']; ?></td>
						<td><?php echo $row['dep']; ?></td>
						<td><?php echo $row['f_mobile']; ?></td>
						<td><?php echo $row['f_email']; ?></td>
						<td><a href="removefaculty.php"class="btn btn-outline-secondary  btn-arrow-right" role="button">More ></a></td></td>   
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
	<button type="clear" class="btn btn-danger"><a href="addfaculty.php" class="text-light text-decoration-none">Add New+</a></button>
</div>

<!----------------------------------------Footer Starts--------------------------------------------------->  
 
<?php include('footer.php');?>
<!----------------------------------------Footer End--------------------------------------------------->



