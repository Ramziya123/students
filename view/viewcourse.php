<?php
include '../config/connection.php';
include_once '../controller/Mycontroller.php';
include 'admin_header.php';
$vare=new Mycontroller();
$res4=$vare->a_viewcourse();
 
 ?>

<!------------------faculty list for superuser section starts------------------------->


<section class="margin_top"> 
	<div class="container margin_top">
		<div class="row">
		<div class="col-md-12">
		
		<div class="card-header text-center p-1 bg-info "><h2 class="text-white">COURSES</h2></div>
			
		</div>				
			<div class="col-md-12 mt-3">
				<div style="overflow-x:auto;">
				<table class="container-fluid table ">
				
				  
					  <th>Sl.no</th>
					  <th>Course</th>
					  <th>Max Strength</th>
					  <th>Incharge</th>
					  <th> </th>
					
					</tr>
				  </thead>
				 
				  <?php
				while($row=mysqli_fetch_assoc($res4))
					{	
 					?>
					  <tbody id="myTable">
					  
					  <tr>
						<td><?php echo $row['id']; ?></td>
						<td><?php echo $row['course']; ?></td>
						<td><?php echo $row['no_student']; ?></td>
						<td><?php echo $row['incharge']; ?></td> 
						<td><button class="btn btn-primary">more</button></td>
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



