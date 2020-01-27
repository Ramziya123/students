<!----------------------------------------Header Starts--------------------------------------------------->  
<?php
 include '../config/connection.php';
include 'student_header.php';
?>

<section class="margin_top"> 
	<div class="container margin_top">
		<div class="row">
		<div class="col-md-12">
		
		<div class="card-header text-center p-1 bg-info "><h2 class="text-white">Time Table</h2></div>
			
		</div>				
			<div class="col-md-12 mt-3">
				<div style="overflow-x:auto;">
				<table class="container-fluid table ">
				
				  <thead>
					<tr>
                      <th>Date</th>
                      <th>Subject</th>
                      <th>Semester</th>
                      <th>Time</th>
                      
					</tr>
				  </thead>
				  
					  <tbody id="myTable">
					  
						<tr>
						  <td></td>
                          <td></td>
						  <td></td>
						  <td></td>
						  
						</tr>
					
					</tbody>
				
				</table>
			</div>
			</div>
		</div>
	</div>
</section>



<!----------------------------------------Footer Starts--------------------------------------------------->  
 
<?php include('footer.php');?>
<!----------------------------------------Footer End--------------------------------------------------->