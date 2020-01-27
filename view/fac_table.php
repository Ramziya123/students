<?php
include '../config/connection.php';
include_once '../controller/Mycontroller.php';
include 'faculty_header.php';
$varl=new Mycontroller();
$reslt=$varl->fac_profile();

 ?>

<div class="col-md-12 mt-3 ">
				        <div style="overflow-x:auto;">
				    <table class="container-fluid table table-bordered w-75 tb">
				  <thead>
					<tr>
					<th>DAY</th>
					<th>Hour1</th>
				    <th>Hour2</th>
					<th>Hour3</th>
					</tr>
                    
				  </thead>
                  <?php
				        while($row=mysqli_fetch_assoc($reslt))
					    {	
 					    ?>
				  
					  <tbody id="myTable">  
                      
                        <tr>
						 <td><?php echo $row['day']; ?></td>
						 <td><?php echo $row['h1']; ?></td>
                         <td><?php echo $row['h2']; ?></td>
                         <td><?php echo $row['h3']; ?></td>
						</tr>
                    	</tbody>
                        <?php } ?>
                       
                </table>
            
			</div>
			</div>
  <?php include 'footer.php'?>      