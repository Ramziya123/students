<?php
 include '../config/connection.php';
include 'faculty_header.php';
?>
 
 <section>
	<div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-12">
                    <div class="card">
                        <div class="card-header text-center bg-info "><h3 class="text-white">Edit Faculty details </h3></div>
                        <div class="card-body">
                            <form name="myform" onsubmit="return validate_form()" action="" method="POST">
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Faculty id</label>
                                    <div class="col-md-6 ">
                                        <input type="number" id="fid" class="form-control box-bg " required name="fid">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Name</label>
                                    <div class="col-md-6">
                                        <input type="text" id="name" class="form-control box-bg" name="name">
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
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Email</label>
                                    <div class="col-md-6">
                                        <input type="text"  id="email" required  class="form-control box-bg" name="email">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">DOB</label>
                                    <div class="col-md-6">
                                        <input type="date" required id="dob" class="form-control box-bg" name="dob">
                                    </div>
                                </div>
								
								
                               
								
								
								<div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Mobile </label>
                                    <div class="col-md-6">
                                        <input type="number" id="mobile" class="form-control box-bg" name="mobile">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Qualification</label>
                                    <div class="col-md-6">
                                        <input type="text"  id="qualification" class="form-control box-bg" name="qualification">
                                    </div>
                                </div>
								
								
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Password</label>
                                    <div class="col-md-6">
                                        <input type="text" id="password" required class="form-control box-bg" name="password">
                                    </div>
                                </div>
								

								
								<div class="row"> 
                                    <div class="col-md-6 text-right">
                                        <button type="submit" class="btn btn-primary" name="submit">
                                        <a class="text-light text-decoration-none">Save</a>
                                        </button>
                                    </div>
									<div class="col-md-6 ">
                                        <button type="submit" class="btn btn-danger"><a href="#" class="text-light text-decoration-none">
                                        Clear</a>
                                        </button>
                                    </div>
                                </div>
								</div>
                            </form>
                            <?php
                            if(isset($_POST['submit']))
                                {   session_start();
                                    $y=$_SESSION['name'];
                                    include '../controller/Mycontroller.php';
                                    $ob=new Mycontroller();
                                    $ob->updatefaculty($y);
                                }
                            ?>
                           
                        </div>
                    </div>
            </div>
        </div>
    </div>

				</div>
</section>
		
<script>
function validate_form()
{
var x=document.forms['myform']['name'].value;
var y=document.forms['myform']['mobile'].value;
var z=document.forms['myform']['password'].value;
var w=document.forms['myform']['confirmpassword'].value;
var em=document.forms['myform']['email'].value;
if (x=="")
	{ 
		alert("fill name field");
	}
if (y=="")
	{ 
		alert("fill mobile field");
	}
if (z=="")
	{ 
		alert("fill password field");
	}
if (w=="")
	{ 
		alert("fill confirmpassword field");
	}
	}
if (em=="")
	{ 
		alert("fill email field");
	}
	atpos = em.indexOf("@");
    dotpos = em.lastIndexOf(".");
         
    if (atpos < 1 || ( dotpos - atpos < 2 ))
		{
            alert("Please enter correct email ID");
            document.myform.email.focus() ;
            return false;
         }
if(y.length<10)
	{
      alert("please enter valid mobilenumber");
	}
if (z!=w)
	
	{
		alert("confirm password doesnt match password,please enter correctly");
	}
      return( true );
}
</script>
 </body>
</div>
</div>
</div>
<!-- Footer -->
<footer class="">
          <div class="copyright text-center bg-gradient-primary py-2 text-light">
            <span>Copyright &copy; YCT University 2019-2020</span>
        </div>
      </footer>
      <!-- End of Footer -->

  

  <!-- Bootstrap core JavaScript-->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/popper.min.js"></script>

  
  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.js"></script>
  <!-- Custom scripts for student applied leave pages-->
  <script src="js/search.js"></script>
  <!-- Bootstrap core JavaScript-->
 
  
 

</html>
