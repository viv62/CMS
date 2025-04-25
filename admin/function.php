<?php
function get_reg_stu_count(){
$con = mysqli_connect('localhost','root','');


$db = mysqli_select_db($con,'lms');
$reg_stu="";
$query = "select count(*) as reg_stu from students";
$query_run = mysqli_query($con,$query);
while($row = mysqli_fetch_assoc($query_run))
{
    $reg_stu = $row['reg_stu'];
}
return($reg_stu);
}


function get_enrolled_stu_count(){
    $con = mysqli_connect('localhost','root','');
    
    
    $db = mysqli_select_db($con,'lms');
    $enrolled_stu="";
    $query = "select count(*) as enrolled_stu from add_students";
    $query_run = mysqli_query($con,$query);
    while($row = mysqli_fetch_assoc($query_run))
    {
        $enrolled_stu = $row['enrolled_stu'];
    }
    return($enrolled_stu);
    }



    function get_reg_tea_count(){
        $con = mysqli_connect('localhost','root','');
        
        
        $db = mysqli_select_db($con,'lms');
        $reg_tea="";
        $query = "select count(*) as reg_tea from faculty";
        $query_run = mysqli_query($con,$query);
        while($row = mysqli_fetch_assoc($query_run))
        {
            $reg_tea = $row['reg_tea'];
        }
        return($reg_tea);
        }


        function get_dept_count(){
            $con = mysqli_connect('localhost','root','');
            
            
            $db = mysqli_select_db($con,'lms');
            $dept="";
            $query = "select count(*) as dept from department";
            $query_run = mysqli_query($con,$query);
            while($row = mysqli_fetch_assoc($query_run))
            {
                $dept = $row['dept'];
            }
            return($dept);
            }


            function get_courses_count(){
                $con = mysqli_connect('localhost','root','');
                
                
                $db = mysqli_select_db($con,'lms');
                $course="";
                $query = "select count(*) as course from course";
                $query_run = mysqli_query($con,$query);
                while($row = mysqli_fetch_assoc($query_run))
                {
                    $course = $row['course'];
                }
                return($course);
                }

                function get_subject_count(){
                    $con = mysqli_connect('localhost','root','');
                    
                    
                    $db = mysqli_select_db($con,'lms');
                    $subject="";
                    $query = "select count(*) as subject from subject";
                    $query_run = mysqli_query($con,$query);
                    while($row = mysqli_fetch_assoc($query_run))
                    {
                        $subject = $row['subject'];
                    }
                    return($subject);
                    }


?>