<?php
include 'faculty_header.php';
?>
			<div class="container-fluid bg-style media1">
			
				<div class="row">
					
					<div class="col-md-12 log-style">
						<form action="" name="loginform" method="post" class="m-auto jumbotron text-light p-3 form-style rounded">

							
							<h3 div class="text-center text-dark">Change Password</h3>
								<input type="text" class="form-control inputcomponent mt-md-3 space" name="email" required="required" placeholder="Email">
							
								<input type="password" class="form-control inputcomponent mt-md-3 space" name="password" required="required" placeholder="Password">
							
                                <input type="password" class="form-control inputcomponent mt-md-3 space" name="confirmpassword" required="required" placeholder="ConfirmPassword">
							
                            <button type="submit" class="btn-primary mt-md-3 px-5 rounded shadow" name="submit" ><a class="a">Change</a></button>
								
								

								
						</form>
						<?php
                        if(isset($_POST['submit']))	
                         {   
                         include '../controller/Mycontroller.php';
                         $obj=new Mycontroller();
                         $obj->f_password($_POST['email'],$_POST['password']);
                   
						}
						?>
					</div>
				</div>
			</div>
		</section>
<!-----------------------------ends first section---------------->
<!-----------------------footer starts---------------->

	<footer class="bg-primary py-2 foot text-center">
			<h5 class="text-center">Powered by YCT University </h5>
		</footer>	
		<script src="js/jquery.min.js"></script>
		<script src="js/validation.js"></script>
		<Script src="js/jquery.validate.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/popper.min.js"></script>

</body>
</html>
<!-----------------------------footr ends ---------------->