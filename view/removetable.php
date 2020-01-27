<?php
include '../config/connection.php';
include 'admin_header.php';

 
 ?>

<section >
					
	<div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-12">
                    <div class="card">
                        <div class="card-header text-center  "><h3 >Time Table</h3></div>
                        <section class="tablebg mt-3">
                        <div class="card-body">

                       
                            <form name="my-form"  action="" method="POST">
                            <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Stream</label>
                                    <div class="col-md-6 d-flex form-check">
									<select name="dep">
										<option selected>Choose..</option>
										<option value="Mechanical">Mechanical</option>
										<option value="EC">Electronics and Communication</option>
                                        <option value="Computer">Computerscience</option>  
									</select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Year</label>
                                    <div class="col-md-6 d-flex form-check">
									<select name="year">
										<option selected>Choose..</option>
										<option value="2020">2020</option>
										<option value="2019">2019</option>
                                        <option value="2018">2018</option>  
									</select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Semester</label>
                                    <div class="col-md-6 d-flex form-check">
									<select name="sem">
										<option selected>Choose..</option>
										<option value="s1">s1</option>
										<option value="s2">s2</option>
                                        <option value="s3">s3</option>
									</select>     
                                    </div>
                                </div>

                                <div class="row"> 
                                    <div class="col-md-6 text-right">
                                        <button type="submit" class="btn btn-primary w-25 " name="submit">
                                        <a href="" class="text-light text-decoration-none" >VIEW</a>
                                        </button>
                                    </div>
                                </form>
                                <?php
                           
                            if(isset($_POST['submit']))
                                {
                                    include '../controller/Mycontroller.php';
                                    $ob=new Mycontroller();
                                    $reslt=$ob->f_table($_POST['dep'],$_POST['year']);
                                }
                               
                            ?>
                                </div>
                         </section>
                        

                     <div class="col-md-12 mt-3 ">
				        <div style="overflow-x:auto;">
				    <table class="container-fluid table table-bordered w-75 tb">
				  <thead>
					<tr>
					<th>DAY</th>
					<th>Hour1</th>
				    <th>Hour2</th>
					<th>Hour3</th>
                    <th></th>
					</tr>
                    
				  </thead>
                  <?php
				        while($row=mysqli_fetch_assoc($reslt))
					    {	
 					    ?>
				  
					  <tbody id="myTable">  
                      <form method="POST">
                        <tr>
						 <td><input type="text" name="day" readonly value="<?php echo $row['day']; ?>"><?php echo $row['day']; ?></td>
						 <td><?php echo $row['h1']; ?></td>
                         <td><?php echo $row['h2']; ?></td>
                         <td><?php echo $row['h3']; ?></td>
                         <td><input type="submit" name='remove' class="form-control btn btn-danger" value="REMOVE"></td>
						</tr>
                        </form>
                    	</tbody>
                        <?php } ?>
                       
                </table>
                <?php 
					if(isset($_POST['remove']))
					{
						$varc->removetable($_POST['date']);
					}
					?>
            
			</div>
			</div>
        
        </div>
    
		</div>
        
             </div>
            </div>
        </div>
    </div>

	</div>
	</section>

<?php
include 'footer.php';
?>