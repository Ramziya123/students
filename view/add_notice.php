<?php
 include '../config/connection.php';
include 'admin_header.php';
?>
 
 <section>
	<div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-12">
                    <div class="card">
                        <div class="card-header text-center  "><h3>ADD NOTICE </h3></div>
                        <div class="card-body">
                            <form name="my-form" action="" method="POST">
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Notice Id</label>
                                    <div class="col-md-6 ">
                                        <input type="number" id="n_id" class="form-control box-bg " name="n_id">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Title</label>
                                    <div class="col-md-6">
                                        <input type="text" id="title" class="form-control box-bg" name="title">
                                    </div>
                                </div>
								
								<div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Startdate</label>
                                    <div class="col-md-6">
                                        <input type="date" id="sdate" class="form-control box-bg" name="sdate">
                                    </div>
                                </div>

                               
								 <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">End Date</label>
                                    <div class="col-md-6">
                                        <input type="date"   class="form-control box-bg" id="date" name="date">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Description</label>
                                    <div class="col-md-6">
                                        <input type="text"   class="form-control box-bg" name="desc" id="desc"> 
                                    </div>
                                </div>
								
								
                               
								<div class="row"> 
                                    <div class="col-md-6 text-right">
                                        <button type="submit" class="btn btn-primary w-25" name="submit">
                                        <a class="text-light text-decoration-none">Publish</a>
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
                            <?php
                            if(isset($_POST['submit']))
                                {
                                    include '../controller/Mycontroller.php';
                                    $ob=new Mycontroller();
                                    $ob->Savenotice();
                                }
                            ?>
                           
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