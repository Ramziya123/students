<?php
class Mymodel
    {
        function insertdata()
            {
                include '../config/connection.php';
                $name= $_POST['name'];
                $regno=$_POST['regno'];
                $email= $_POST['email'];
                $dep=$_POST['dep'];
                $sem=$_POST['sem'];
                $year= $_POST['year'];
                $mobile= $_POST['mobile'];
                $pwd=$_POST['password'];
                $cpwd=$_POST['confirmpassword'];
                $dob=$_POST['dob'];
                if (strlen($pwd)<6){
                    echo "FAILED! You tried to submit a password which is less than 6chars.";
                    }
                else if (strlen($pwd)!=strlen($cpwd)){
                    echo "FAILED! Confirm password doesn't match password";
                    }
                else if(!preg_match("/^[a-zA-Z'-]+$/",$name))
                    { echo "FAILED! You tried to submit an invalid  name";
                    } 
                    
                else if (preg_match('/^[0-9]{10}+$/', $mobile)!=true)
                    {
                        echo "FAILED! You tried to submit a mobilenumber which is not valid";
                    }
                    
                
                
                else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
                    {
                        echo "FAILED! You tried to submit an Invalid email format"; 
                    }
                else if((getdate()<$dob))
                    {
                      echo "FAILED! You tried to submit an Invalid DOB";
                    }
                
        
                else
                {
                $sql="INSERT INTO student(name,regno,dep,sem,year,email,mobile,password,dob) VALUES('".$name."','".$regno."','".$dep."',
                '".$sem."','".$year."','".$email."','".$mobile."','".$pwd."','".$dob."')";
                if(mysqli_query($conn,$sql))
                {
                    header('location:../view/admin_home.php');
                }
                else
                {
                    echo'error';
                }
            }
                
            
            }
            function logcheck($email,$pwd)
            {
               
                include '../config/connection.php';
                $sql="SELECT * FROM student WHERE email='".$email."' and password='".$pwd."'";
                $sql1="SELECT * FROM faculty WHERE f_email='".$email."' and f_password='".$pwd."'";
                                                                  
                $result=mysqli_query ($conn,$sql);
                $result1=mysqli_query ($conn,$sql1);
             
                if(mysqli_num_rows($result)>0)
	                {	
		                while($row=mysqli_fetch_assoc($result))
		                    {
                                session_start();
                                $_SESSION['name'] = $row['name'];
                                $_SESSION['dep']=$row['dep'];
                                $_SESSION['sem']=$row['sem'];
			                    header('location:../view/student_home.php');
		                    }
	               
                     }
                 else if(mysqli_num_rows($result1)>0)
	                {	
		                while($row=mysqli_fetch_assoc($result1))
		                    {
		                    	session_start();
                                $_SESSION['name'] = $row['f_name'];
			                     header('location:../view/faculty_home.php');
		                    }
	               
                     }
                    else 
                    {
                        echo "error";
                    }

                   
           }

           function fac_password($email,$pwd)
            {
               
                include '../config/connection.php';
                 $sql="UPDATE faculty SET f_password='".$pwd."' WHERE f_email='".$email."'";
                                                                  
               
                            
                if(mysqli_query ($conn,$sql))
	                {	
		               
			            echo"Password Updated Successfully";
		            }
	               
             }
             
           function stud_password($email,$pwd)
           {
              
               include '../config/connection.php';
                $sql="UPDATE student SET password='".$pwd."' WHERE email='".$email."'";
                                                                 
              
                           
               if(mysqli_query ($conn,$sql))
                   {	
                      
                       echo"Password Updated Successfully";
                   }
                  
            }
		   
		   function insertcourse($name,$incharge,$strength)
            {
                include '../config/connection.php';
                  
                $sql="INSERT INTO courses(course,incharge,no_student) VALUES('".$name."','".$incharge."',
				'".$strength."')";
                if(mysqli_query($conn,$sql))
                {
                    header('location:../view/admin_home.php');
                }
                else
                {
                    echo'error';
                }
              
            }
            function insertnotice($nid,$title,$sdate,$edate,$des)
            {
                include '../config/connection.php';
                  
                $sql="INSERT INTO notices(n_id,title,s_date,e_date,descp) VALUES('".$nid."','".$title."',
				'".$sdate."','".$edate."','".$des."')";
                if(mysqli_query($conn,$sql))
                {
                    echo"notice added";
                }
                else
                {
                    echo'error';
                }
              
            }
            function insertfaculty($fid,$name,$dep,$dob,$qual,$email,$mobile,$pass)
            {
                include '../config/connection.php';
                if (strlen($pass) <6){
                    echo "FAILED! You tried to submit a password which is less than 6 chars.";
                    }
               
                else if(!preg_match("/^[a-zA-Z'-]+$/",$name))
                    { echo "FAILED! You tried to submit an invalid  name";
                    } 
                    
                else if (preg_match('/^[0-9]{10}+$/', $mobile)!=true)
                    {
                        echo "FAILED! You tried to submit a mobilenumber which is not valid";
                    }
                    
                
                
                else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
                    {
                        echo "FAILED! You tried to submit an Invalid email format"; 
                    }
                else if((getdate()<$dob))
                    {
                      echo "FAILED! You tried to submit an Invalid DOB";
                    }
                
        
                else
                {
                  
                $sql="INSERT INTO faculty(f_id,f_name,dep,f_dob,f_qualification,f_email,f_mobile,f_password)VALUES('".$fid."','".$name."','".$dep."','".$dob."','".$qual."','".$email."','".$mobile."','".$pass."')";
                if(mysqli_query($conn,$sql))
                {
                    header('location:../view/viewfaculty.php');
                }
                else
                {
                    echo'error';
                }
              
            }
            }
            function updatefacultys($fid,$dob,$qual,$email,$mobile)
            {
                include '../config/connection.php';
                
                  
                $sql="UPDATE faculty SET f_id='".$fid."', f_dob='".$dob."',f_qualification='".$qual."',f_email='".$email."',
                ,f_mobile='".$mobile."' WHERE f_name='".$name."'";
                if(mysqli_query($conn,$sql))
                {
                    header('location:../view/faculty_home.php');
                }
                else
                {
                    echo'error';
                }
              
            
            }


            function insertsubject($dep,$sem,$sub_code,$sub)
            {
                include '../config/connection.php';
                  
                $sql="INSERT INTO subjects(dep,sem,sub_code,subject)VALUES('".$dep."','".$sem."','".$sub_code."','".$sub."')";
                if(mysqli_query($conn,$sql))
                {
                    header('location:../view/admin_home.php');
                }
                else
                {
                    echo'error';
                }
              
            }
            function insertresult($name,$reg,$dep,$sem,$sub,$mark,$total)
            {
                include '../config/connection.php';
                  
                $sql="INSERT INTO assessment(dep,sem,subject,s_name,regno,mark,total)VALUES('".$dep."','".$sem."','".$sub."','".$name."'
                ,'".$reg."','".$mark."','".$total."')";
                if(mysqli_query($conn,$sql))
                {
                    header('location:../view/faculty_home.php');
                }
                else
                {
                    echo'error';
                }
              
            }
           

            function inserttable($dep,$sem,$year,$day,$h1,$h2,$h3)
            {
                include '../config/connection.php';
                  
                $sql="INSERT INTO timetable(dep,sem,year,day,h1,h2,h3)VALUES('".$dep."','".$sem."','".$year."',
                '".$day."','".$h1."','".$h2."','".$h3."')";
                if(mysqli_query($conn,$sql))
                {
                    header('location:../view/faculty_view_table.php');
                }
                else
                {
                    echo'error';
                }
              
            }
            function admin_viewfaculty()
                {
                    include '../config/connection.php';
                   
                    $sql="SELECT * FROM faculty";
                    $result=mysqli_query($conn,$sql);
                    return $result;
                }
                function admin_viewnotice()
                {
                    include '../config/connection.php';
                   
                    $sql="SELECT * FROM notices";
                    $result=mysqli_query($conn,$sql);
                    return $result;
                }
            function admin_viewstudent()
                {
                    include '../config/connection.php';
                   
                    $sql1="SELECT * FROM student";
                    $results=mysqli_query($conn,$sql1);
                    return $results;
                }
            function admin_viewsubject()
                {
                    include '../config/connection.php';
                   
                    $sql="SELECT * FROM subjects";
                    $resultb=mysqli_query($conn,$sql);
                    return $resultb;
                }
            function admin_viewcourse()
                {
                    include '../config/connection.php';
                   
                    $sql="SELECT * FROM courses";
                    $resultc=mysqli_query($conn,$sql);
                    return $resultc;
                }
                
            function faculty_viewassess()
                {
                    include '../config/connection.php';
                   
                    $sql="SELECT * FROM assessment";
                    $resultw=mysqli_query($conn,$sql);
                    return $resultw;
                }
            function view_studprofile($name)
                {
                    include '../config/connection.php';
                   
                    $sql="SELECT * FROM student where name='".$name."'";
                    $resulty=mysqli_query($conn,$sql);
                    return($resulty);
                }
                function view_studsubject($dp)
                {
                    include '../config/connection.php';
                   
                    $sql="SELECT * FROM subjects where dep='".$dp."'";
                    $resulty=mysqli_query($conn,$sql);
                    return($resulty);
                }
                function view_studassess($name)
                {
                    include '../config/connection.php';
                   
                    $sql="SELECT * FROM assessment where s_name='".$name."'";
                    $resulty=mysqli_query($conn,$sql);
                    return($resulty);
                }
                function view_facprofile($name)
                {
                    include '../config/connection.php';
                   
                    $sql="SELECT * FROM faculty where f_name='".$name."'";
                    $resulty=mysqli_query($conn,$sql);
                    return($resulty);
                }
                function rem_fac($x)
                {
                    include '../config/connection.php';
                   
                    $sql="DELETE FROM faculty WHERE f_name='".$x."'";
                    $resulty=mysqli_query($conn,$sql);
                    return($resulty);
                }
              
                function   faculty_viewtable($x,$y)
                {
                    include '../config/connection.php';
                   
                    $sql="SELECT * FROM timetable where dep='".$x."' and year='".$y."'";
                    
                    $resulty=mysqli_query($conn,$sql) ;
                    return($resulty);
                   
                }
            function  removefaculty($x)
                {
                    include '../config/connection.php';
                   
                    $sql="DELETE FROM faculty where f_id='".$x."'";
                   if(mysqli_query($conn,$sql))
                    {
                    echo"faculty removed";
                     }
                    else
                    {
                    echo'error';
                    }
                    
                }
             function  removestudents($x)
                {
                    include '../config/connection.php';
                   
                    $sql="DELETE FROM student where regno='".$x."'";
                   if(mysqli_query($conn,$sql))
                    {
                    echo"student removed";
                     }
                    else
                    {
                    echo'error';
                    }
                    
                }
                function  removetables($x)
                {
                    include '../config/connection.php';
                   
                    $sql="DELETE FROM timetable where day='".$x."'";
                   if(mysqli_query($conn,$sql))
                    {
                    echo"student removed";
                     }
                    else
                    {
                    echo'error';
                    }
                    
                }
                function stud_viewsubject($y)
                {
                    include '../config/connection.php';
                   
                    $sql="SELECT * FROM subjects where dep='".$y."'";
                    $resultb=mysqli_query($conn,$sql);
                    return $resultb;
                }




    }

?>
 

