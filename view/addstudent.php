<?php
                            if(isset($_POST['submit']))
                                {
                                    include '../controller/Mycontroller.php';
                                    $ob=new Mycontroller();
                                    $ob->Savestudent();
                                }
                            ?>
<?php
 include '../config/connection.php';
include 'faculty_header.php';
?>
 
 <section>
	<div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-12">
                    <div class="card">
                        <div class="card-header text-center bg-info  "><h3 class="text-white">Add Student details </h3></div>
                        <div class="card-body">
                            <form name="myform" onsubmit="return validate()" action="" method="POST">
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Reg No:</label>
                                    <div class="col-md-6 ">
                                        <input type="number" id="regno" class="form-control box-bg " name="regno">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Name</label>
                                    <div class="col-md-6">
                                        <input type="text" id="name" class="form-control box-bg"required  name="name">
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
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Email</label>
                                    <div class="col-md-6">
                                        <input type="text"  id="email" class="form-control box-bg"required name="email">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">DOB</label>
                                    <div class="col-md-6">
                                        <input type="date" id="date"  class="form-control box-bg"required  name="dob">
                                    </div>
                                </div>
								
								
								
								<div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Mobile </label>
                                    <div class="col-md-6">
                                        <input type="number" id="mobile" class="form-control box-bg" name="mobile">
                                    </div>
                                </div>
                                
                               								
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Password</label>
                                    <div class="col-md-6">
                                        <input type="text" id="password"  class="form-control box-bg" required name="password">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder"> Confirm Password</label>
                                    <div class="col-md-6">
                                        <input type="text" id="confirmpassword"  class="form-control box-bg" name="confirmpassword">
                                    </div>
                                </div>
								

								
								<div class="row"> 
                                    <div class="col-md-6 text-right">
                                        <button type="submit" class="btn btn-primary w-25" name="submit">
                                        <a class="text-light text-decoration-none">Register</a>
                                        </button>
                                    </div>
									<div class="col-md-6 ">
                                        <button type="submit" class="btn btn-danger w-25"><a href="#" class="text-light text-decoration-none">
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
function validate()
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
