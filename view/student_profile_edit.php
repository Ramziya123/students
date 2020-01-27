<?php
 include '../config/connection.php';
include 'student_header.php';
?>
	
<section>
					
	<div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-12">
                    <div class="card">
                        <div class="card-header text-center bg-info "><h3 class="text-white">Edit Your Profile</h3></div>
                        <div class="card-body">
                            <form name="my-form" onsubmit="return validform()" action="" method="">
                            <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Register Number</label>
                                    <div class="col-md-6 ">
                                        <input type="number" id="full_name" class="form-control box-bg " name="regno">
                                    </div>
                                </div>

                                <div class="form-group row"> 
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Name</label>
                                    <div class="col-md-6">
                                        <input type="text" id="email_address" class="form-control box-bg" name="name" value=""
										readonly>
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
										<option  name="1">s1</option>
										<option  name="2">s2</option>
                                        <option  name="3">s3</option>
                                       
									</select>
                                       
                                    </div>
                                </div>
								
								<div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Year</label>
                                    <div class="col-md-6 d-flex form-check">
									<select name="year">
										<option selected>Choose..</option>
										<option name="2020">2020</option>
										<option name="2019">2019</option>
                                        <option  name="2018">2018</option>
                                       
									</select>
                                       
                                    </div>
                                </div>

								 <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Email</label>
                                    <div class="col-md-6">
                                        <input type="text"   class="form-control box-bg" name="email">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">DOB</label>
                                    <div class="col-md-6">
                                        <input type="date"   class="form-control box-bg" name="dob">
                                    </div>
                                </div>
								
								
								
								<div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Mobile </label>
                                    <div class="col-md-6">
                                        <input type="number"  class="form-control box-bg" name="mobile">
                                    </div>
                                </div>
								
								
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Password</label>
                                    <div class="col-md-6">
                                        <input type="text"   class="form-control box-bg" name="password">
                                    </div>
                                </div>
								
								
								
								<div class="row"> 
                                    <div class="col-md-6 text-right">
                                        <button type="submit" class="btn btn-primary " onclick="say()">
                                        <a href="student-profile.php" class="text-light text-decoration-none">Save</a>
                                        </button>
                                    </div>
									<div class="col-md-6 ">
                                        <button type="submit" class="btn btn-danger"><a href="student-edit.php" class="text-light text-decoration-none">
                                        Clear</a>
                                        </button>
                                    </div>
                                </div>
								</div>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>

				</div>
			</section>
           
<script>
	function say()
	{
		alert("successfully submitted");
	}
</script>
			
 

<!-- Footer -->
    <?php include('footer.php'); ?>