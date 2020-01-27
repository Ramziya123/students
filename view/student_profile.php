<?php
session_start();
include '../config/connection.php';
include_once '../controller/Mycontroller.php';
include 'student_header.php';
$vary=new Mycontroller();
$name=$_SESSION['name'];

$res3=$vary->stud_profile($name);

 ?>

		<!--------------Student profile section---------------------->
			<section>
				<div class="container">
						<div class="row border ">
							<div class="col-md-6">
								<h3 class="text-primary head"><i class="fas fa-user fa-2x" ></i>MY PROFILE</h3>
								<div class="d-flex">
									<div class="col-md-3">
										
									</div>
								</div>
							</div>

						
							<?php
								while($row=mysqli_fetch_assoc($res3))
								{	
 								?>	
						
						<div class="col-md-12">
							<table class="border table table-striped bg-table">
								<tr>
								<th class="text-info">Basic Information</th>
								<th class="text-right"><a href="student_profile_edit.php"><button   class="btn btn-primary text-white px-4">Edit<i class="fas  fa-edit"></i></button></a>
								</th>
								</tr>
								
								
								<tr>
								<td class="font-weight-bolder">RegisterNumber</td>
								<td><?php echo $row['regno']; ?></td>
								</tr>
								
								<tr>
								<td class="font-weight-bolder">Name</td>
								<td><?php echo $row['name']; ?></td>
								</tr>
								
							
								
								<tr>
								<td class="font-weight-bolder">Course</td>
								<td><?php echo  $row['dep']; ?></td>
								</tr>
								
								<tr>
								<td class="font-weight-bolder">DOB</td>
								<td><?php echo $row['dob']; ?></td>
								</tr>
								
								
								
								<tr>
								<td class="font-weight-bolder">Mobile</td>
								<td><?php echo $row['mobile']; ?></td>
								</tr>
								
								<tr>
								<td class="font-weight-bolder">Email</td>
								<td><?php echo $row['email']; ?></td>
								</tr>						
								
								<tr>
								<td class="font-weight-bolder">Year</td>
								<td><?php echo $row['year']; ?></td>
								</tr>
								
							</table>
							<?php 
								}
							?>
						</div>
					</div>
				</div>
			</section>
			
		<!--------------Student profile section ends---------------------->
	  <!-- Footer -->
     <?php include('footer.php'); ?>