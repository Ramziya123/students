<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title> dash board</title>
		<!-- Custom fonts for this template-->
		<link  rel="stylesheet" href="fontawesome/css/all.min.css">
		<link href="css/sb-admin-2.min.css" rel="stylesheet">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link href="css/style3.css" rel="stylesheet">
		<link rel="stylesheet" href="css/style3.css">
</head>

<body id="page-top">


<!-- Page Wrapper -->
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="admin_home.php">
			<div>
		SUPER USER PORTAL
        </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">
		
      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="student_home.php" class="text-center">
          <i class="fas fa-user user-font px-4"></i></a></li>

        
      <!-- Nav Item - Pages Collapse Menu -->
	  
	   <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-chalkboard-teacher px-3"></i>
         <span>Faculties</span>
        </a>
		
		 <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
     <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item border-top" href="addfaculty.php">ADD</a>
            <a class="collapse-item" href="viewfaculty.php">VIEW </a>
			<a class="collapse-item" href="removefaculty.php">REMOVE</a>
    </div>
        </div>	
      </li>
	  
	  <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages1" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-chalkboard-teacher px-3"></i>
         <span>Students</span>
        </a>
      <div id="collapsePages1" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
     <div class="bg-white py-2 collapse-inner rounded">
          
            <a class="collapse-item" href="viewstudents.php">VIEW </a>
			<a class="collapse-item border-top" href="removestudent.php">REMOVE</a>
			
    </div>
        </div>	
      </li>
	  

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages2" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-school px-3"></i>
         <span>Subjects</span>
        </a>
		
		 <div id="collapsePages2" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
     <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item border-top" href="addsubject.php">ADD</a>
            <a class="collapse-item" href="viewsubjects.php">VIEW
      </li>
	  
	  
	  <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages3" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-school px-3"></i>
         <span>Courses</span>
        </a>
		
		 <div id="collapsePages3" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
     <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item border-top" href="addcourse.php">ADD</a>
            <a class="collapse-item" href="viewcourse.php">VIEW</a>
    </div>
        </div>	
      </li>
	 
<li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages4" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-chalkboard-teacher px-3"></i>
         <span>Timetable</span>
        </a>
		
		 <div id="collapsePages4" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
     <div class="bg-white py-2 collapse-inner rounded">
          
            <a class="collapse-item" href="admin_view_table.php">VIEW </a>
			<a class="collapse-item border-top" href="removetable.php">REMOVE</a>
			
    </div>
        </div>	
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages9" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-bell fa px-3"></i>
         <span>Notices</span>
        </a>
      <div id="collapsePages9" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
     <div class="bg-white py-2 collapse-inner rounded"> 
          <a class="collapse-item" href="add_notice.php">ADD </a>
            <a class="collapse-item" href="view_notice.php">VIEW </a>
    </div>
        </div>	
      </li>
      
     
	
      
	  
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
		<div class="container-fliud">
		
		
        <nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow bg-gradient-primary">
		<!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle  bg-light">
            <i class="fa fa-bars"></i>
          </button> 
		  
		  
		  
		 <!-- Topbar Navbar -->
		 <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>
          <ul class="navbar-nav ml-auto pr-5 p-hide">

            <!-- Nav Item - Alerts -->
            <li class="nav-item ">
              <a class="nav-link " href="admin_home.php">
                <i class="fas fa-home"><p> Home</p></i>
              </a>
         	
             
			
			<li class="nav-item">
              <a class="nav-link " href="first.php" >
                <i class="fas fa-sign-out-alt  text-gray"><p>LogOut</p></i>
              </a>
            </li>

          </ul>

        </nav>
</div>
		
  
				
	
		
		 

 
    <!-- End of Content Wrapper -->


  