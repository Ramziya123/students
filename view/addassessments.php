<!----------------------------------------Header Starts--------------------------------------------------->  
<?php
include '../config/connection.php';
include 'faculty_header.php';
?>
<!----------------------------------------Header End------------------------------------------------------>
<section>
				
	<div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-12">
                    <div class="card">
                        <div class="card-header text-center bg-info "><h3 class="text-white">Enter assessment details</h3></div>
                        <div class="card-body">
                            <form name="my-form" onsubmit="return validform()" action="" method="POST">
                           
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Registerno.</label>
                                    <div class="col-md-6 ">
                                        <input type="text" id="regno" class="form-control box-bg " name="regno">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Student Name</label>
                                    <div class="col-md-6 ">
                                        <input type="text" id="name" class="form-control box-bg " name="name">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Department</label>
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

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Subject</label>
                                    <div class="col-md-6">
                                        <input type="text" id="subject" class="form-control box-bg" name="subject" 
										>
                                    </div>
                                </div>
								
				               <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Mark</label>
                                    <div class="col-md-6">
                                        <input type="number" id="mark" class="form-control box-bg" name="mark">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Total</label>
                                    <div class="col-md-6">
                                        <input type="number" id="total"  class="form-control box-bg" name="total">
                                    </div>
                                </div>

                                
								<div class="row"> 
                                    <div class="col-md-6 text-right">
                                        <button type="submit" class="btn btn-primary w-25"  name="submit">
                                        <a class="text-light text-decoration-none" >Save</a>
                                        </button>
                                    </div>
									<div class="col-md-6 ">
                                        <button type="clear" class="btn btn-danger w-25"><a href="#" class="text-light text-decoration-none">
                                        Clear</a>
                                        </button>
                                    </div>
                                </div>
								</div>
                            </form>
                            <?php
                            if(isset($_POST['submit']))
                                {
                                    include '../controller/Mycontroller.php';
                                    $obj=new Mycontroller();
                                    $obj->Saveresult();
                                }
                            ?>
                        </div>
                    </div>
            </div>
        </div>
    </div>

				</div>
			</section>
<!----------------------------------------Footer Starts--------------------------------------------------->  
 
<?php include('footer.php');?>
<!----------------------------------------Footer End--------------------------------------------------->