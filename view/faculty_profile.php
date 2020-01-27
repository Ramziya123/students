<?php
session_start();
include '../config/connection.php';
include_once '../controller/Mycontroller.php';
include 'faculty_header.php';
$varl=new Mycontroller();
$name=$_SESSION['name'];

$resl=$varl->fac_profile($name);

 ?>

		<!--------------faculty profile section---------------------->
			<!------------session start---------------->
<section >
				<div class="container">
					<div class="row border ">
						<div class="col-md-6">
							<h3 class="text-primary head"><i class="fas fa-user fa-2x" ></i>MY PROFILE</h3>
							<div class="d-flex">
								<div class="col-md-3">
									<p class="border text-info text-center border-info">Basic Info</p>
								</div>
							</div>
						</div>
						
						
                        <?php
								while($row=mysqli_fetch_assoc($resl))
								{	
 								?>	
					
					<div class="col-md-12">
						<table class="border table table-striped bg-table">
							<tr>
							<th>Faculty-id: <?php echo $row['f_id']; ?></th>
							<th class="text-right"><a href="faculty_profile_edit.php"><button class="btn btn-primary text-white px-4">Edit<i class="fas  fa-edit"></i></button></a>
							</th>
							</tr>
							
							
							<tr>
							<td class="font-weight-bolder">Name</td>
							<td><?php echo $row['f_name']; ?></td>
							</tr>
							
							<tr>
							<td class="font-weight-bolder">Department</td>
							<td><?php echo $row['dep']; ?></td>
							</tr>
							
							
							<tr>
							<td class="font-weight-bolder">Qualification</td>
							<td><?php echo $row['f_qualification']; ?></td>
							</tr>
							
							
							
							<tr>
							<td class="font-weight-bolder">Mobile</td>
							<td><?php echo $row['f_mobile']; ?></td>
							</tr>
							
							<tr>
							<td class="font-weight-bolder">Email</td>
							<td><?php echo $row['f_email']; ?></td>
							</tr>
							
							
							
							
                        </table>
                        <?php 
								}
							?>
					
					</div>
				</div>
			</section>

		<!--------------Student profile section ends---------------------->
	  <!-- Footer -->
	  
	


<?php
include 'footer.php';
?>