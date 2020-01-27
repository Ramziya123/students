<?php
 include '../config/connection.php';

    class Mycontroller
        {
            function firstpage()
                {
                    header('location:view/first.php');
                }
                function login($email,$password)
                {
                   
                    if($email=='superuser' && $password=='super123')
                    {
                        header('location:../view/admin_home.php');
                    }
                    else 
                    {
                        include '../model/Mymodel.php';
                        $mod=new Mymodel();
                        $mod->logcheck($email,$password);

                    }
                           
                        
                }

                function f_password($email,$password)
                {
                        include '../model/Mymodel.php';
                        $mod=new Mymodel();
                        $mod->fac_password($email,$password);

                  
                }

                function s_password($email,$password)
                {
                        include '../model/Mymodel.php';
                        $mod=new Mymodel();
                        $mod->stud_password($email,$password);

                  
                }
                function Savestudent()
                {   $name= $_POST['name'];
                    $regno=$_POST['regno'];
                    $email= $_POST['email'];
                    $dep=$_POST['dep'];
                    $sem=$_POST['sem'];
                    $year= $_POST['year'];
                    $mobile= $_POST['mobile'];
                    $dob= $_POST['dob'];
                    $password=$_POST['password'];

                    include '../model/Mymodel.php';
                    $mod=new Mymodel();
                    $mod->insertdata();
                }

                function Savefaculty()
                {   
                   
                    
                    $fid=$_POST['fid'];
                    $name=$_POST['name'];
                    $dep= $_POST['dep'];
                    $dob=$_POST['dob'];
                    $qual= $_POST['qualification'];
                    $email=$_POST['email'];
                    $mobile=$_POST['mobile'];
                    $pass=$_POST['password'];

                    include '../model/Mymodel.php';
                    $modl=new Mymodel();
                    $modl->insertfaculty($fid,$name,$dep,$dob,$qual,$email,$mobile,$pass);
                }
                function updatefaculty()
                {   
                   
                    
                    $fid=$_POST['fid'];
                    $dob=$_POST['dob'];
                    $qual= $_POST['qualification'];
                    $email=$_POST['email'];
                    $mobile=$_POST['mobile'];
                    

                    include '../model/Mymodel.php';
                    $modl=new Mymodel();
                    $modl->updatefacultys($fid,$dob,$qual,$email,$mobile);
                }
				
				
			function Savecourse()
                {   $name= $_POST['c_name'];
                    $incharge=$_POST['c_incharge'];
                    $no= $_POST['strength'];
                    include '../model/Mymodel.php';
                    $mod=new Mymodel();
                    $mod->insertcourse($name,$incharge,$no);
                }

            function Savesubject()
                {   
                   
                    $dep=$_POST['dep'];
                    $sem=$_POST['sem'];
                    $sub_code= $_POST['sub_code'];
                    $sub=$_POST['sub'];
                   
                    include '../model/Mymodel.php';
                    $s=new Mymodel();
                    $s->insertsubject($dep,$sem,$sub_code,$sub);
                }

                function Savenotice()
                {   
                   
                    $nid=$_POST['n_id'];
                    $title=$_POST['title'];
                    $sdate= $_POST['sdate'];
                    $edate=$_POST['date'];
                    $desc=$_POST['desc'];
                   
                    include '../model/Mymodel.php';
                    $s=new Mymodel();
                    $s->insertnotice($nid,$title,$sdate,$edate,$desc);
                }
                function a_viewfaculty()
                    {
                        include '../model/Mymodel.php';
                        $var=new Mymodel();
                        $res=$var->admin_viewfaculty();
                        return $res;
                    }
                function a_viewstudent()
                    {
                        include '../model/Mymodel.php';
                        $vars=new Mymodel();
                        $ress=$vars->admin_viewstudent();
                        return $ress;
                    }
                function a_viewsubject()
                    {
                        include '../model/Mymodel.php';
                        $varsb=new Mymodel();
                        $resb=$varsb->admin_viewsubject();
                        return $resb;
                    }
                function a_viewcourse()
                    {
                        include '../model/Mymodel.php';
                        $varsc=new Mymodel();
                        $resc=$varsc->admin_viewcourse();
                        return $resc;
                    }
                    function a_viewnotice()
                    {
                        include '../model/Mymodel.php';
                        $varsc=new Mymodel();
                        $resc=$varsc->admin_viewnotice();
                        return $resc;
                    }
                function Saveresult()
                    {   
                        $dep=$_POST['dep'];
                        $reg=$_POST['regno'];
                        $sem=$_POST['sem'];
                        $year=$_POST['year'];
                        $name= $_POST['name'];
                        $mark=$_POST['mark'];
                        $total= $_POST['total'];
                        include '../model/Mymodel.php';
                        $mod=new Mymodel();
                        $mod->insertresult($name,$reg,$dep,$sem,$year,$mark,$total);
                    }

                    function Savetable()
                    {   
                        $dep=$_POST['dep'];
                        $sem=$_POST['sem'];
                        $year=$_POST['year'];
                        $day= $_POST['day'];
                        $h1=$_POST['h1'];
                        $h2=$_POST['h2'];
                        $h3=$_POST['h3'];
                        include '../model/Mymodel.php';
                        $modq=new Mymodel();
                        $modq->inserttable($dep,$sem,$year,$day,$h1,$h2,$h3);
                    }
                function  f_viewassess()
                    {
                        include '../model/Mymodel.php';
                        $varsw=new Mymodel();
                        $resw=$varsw->faculty_viewassess();
                        return $resw;
                    }
                    function  stud_profile($name)
                    {
                        include '../model/Mymodel.php';
                        $varsy=new Mymodel();
                        $resy=$varsy->view_studprofile($name);
                        return $resy;
                    }
                    function  stud_assess($name)
                    {
                        include '../model/Mymodel.php';
                        $varsh=new Mymodel();
                        $resh=$varsh->view_studassess($name);
                        return $resh;
                    }
                    function  stud_subject($dp)
                    {
                        include '../model/Mymodel.php';
                        $varsz=new Mymodel();
                        $resz=$varsz->view_studsubject($dp);
                        return $resz;
                    }
                    function  fac_profile($name)
                    {
                        include '../model/Mymodel.php';
                        $varsl=new Mymodel();
                        $resl=$varsl->view_facprofile($name);
                        return $resl;
                    }
                    function  removefaculty($y)
                    {
                        include '../model/Mymodel.php';
                        $varsp=new Mymodel();
                        $resp=$varsp->rem_fac($y);
                        return $resp;
                    }
                    
                    function f_table($x,$y)
                    {
                        include '../model/Mymodel.php';
                        $varsw=new Mymodel();
                        $resw=$varsw->faculty_viewtable($x,$y);
                        return $resw;
                    }
                   function removefacultys($id)
                    {
                       
                        $var9=new Mymodel();
                        $var9->removefaculty($id);
                    }
                    function removestudent($id)
                    {
                       
                        $vart=new Mymodel();
                        $vart->removestudents($id);
                    }
                    function removetable($id)
                    {
                       
                        $vart=new Mymodel();
                        $vart->removetables($id);
                    }
                    function s_viewsubject($y)
                    {
                        include '../model/Mymodel.php';
                        $varsb=new Mymodel();
                        $resb=$varsb->stud_viewsubject($y);
                        return $resb;
                    }
        }
?>