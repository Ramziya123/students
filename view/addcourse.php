<?php
 include '../config/connection.php';
include 'admin_header.php';
?>
<section>
		
	<div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-12">
                    <div class="card">
                        <div class="card-header text-center bg-info "><h3 class="text-white">Create New Course</h3></div>
                        <div class="card-body">
                            <form name="my-form" onsubmit="return validform()" action="" method="POST">
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Course Name</label>
                                    <div class="col-md-6 ">
                                        <input type="text" id="full_name" class="form-control box-bg " name="c_name">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">No. of students</label>
                                    <div class="col-md-6">
                                        <input type="number" id="email_address" class="form-control box-bg" name="strength" 
										>
                                    </div>
                                </div>
								
								<div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Incharge</label>
                                    <div class="col-md-6">
                                        <input type="text"  class="form-control box-bg" name="c_incharge">
                                    </div>
                                </div>

                                
								<div class="row"> 
                                    <div class="col-md-6 text-right">
                                        <button type="submit" class="btn btn-primary " onclick="say()" name="submit">
                                        <a href="faculty-profile.php" class="text-light text-decoration-none" >Save</a>
                                        </button>
                                    </div>
									<div class="col-md-6 ">
                                        <button type="clear" class="btn btn-danger"><a href="faculty-profile-edit.php" class="text-light text-decoration-none">
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
                                    $obj->Savecourse();
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
 <?php
include 'footer.php';
?>

<!----------------------------------------Footer End--------------------------------------------------->