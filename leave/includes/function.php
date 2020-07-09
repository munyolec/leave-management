<?php
function query($sql) {

global $connection;

return mysqli_query($connection, $sql);


}

function set_message($msg){

if(!empty($msg)) {

$_SESSION['message'] = $msg;

} else {

$msg = "";


    }


}


function display_message() {

    if(isset($_SESSION['message'])) {

        echo $_SESSION['message'];
        unset($_SESSION['message']);

    }



}




function escape_string($string){

global $connection;

return mysqli_real_escape_string($connection, $string);


}



function fetch_array($result){

return mysqli_fetch_array($result);

}


function redirect($location){

return header("Location: $location ");


}

function confirm($result)
{
  global $connection;
  if(!$result)
  {
       die('QUERY FAILED' . mysqli_error($connection));
  }
}
function leave_application(){
    global $connection;
    if(isset($_POST['submit']))
    {
        $emp_no=$_POST['emp_no'];
        $leave_name=$_POST['leave_name'];
        $start_date=$_POST['start_date'];
        $start_end=$_POST['start_end'];
        $leave="INSERT INTO leave_applied (emp_no,start_date,start_end,leave_name)";
        $leave .="VALUES('$emp_no','$start_date','$start_end','$leave_name')";
        
        $apply=mysqli_query($connection,$leave);
                        }
}
                       
    
    

function add_employee()
{
    
     global $connection;
  if(isset($_POST['register']))
                        {
                        $first_name=$_POST['firstname'];
                        $last_name=$_POST['lastname'];
                        $nationality=$_POST['nationality'];
                        $gender=$_POST['gender'];
                        $id_no=$_POST['id_no'];
                        $email=$_POST['email'];
                        $department=$_POST['department'];
                        $doa=$_POST['doa'];
                        $password=$_POST['password'];
                        $tel_no=$_POST['tel_no'];
                        $job_title=$_POST['job_title'];
                        $photo=$_POST['photo'];
                        
                        if($last_name ==""  ||$email =="" )
                        {
                        echo "This field(s) should not be empty";
                        }
                        else
                        {
                         $query ="INSERT INTO employee(firstname,lastname,nationality,gender,id_no,email,department,doa,password,tel_no,job_title,photo)";
        $query.="VALUES ('$first_name','$last_name','$nationality','$gender','$id_no','$email','$department','$doa','$password','$tel_no','$job_title','$photo')";
                        $register=mysqli_query($connection,$query);
                        }
                        if(!$register)
                        {
                            die('QUERY FAILED' . mysqli_error($connection));
                        }
                        redirect("index.php");
                        }
    
    
        
    
}
function get_emp_no()
{
    $query=query("SELECT*FROM employee WHERE emp_role!='admin'' ");
   
    $num_rows=mysqli_num_rows($query);
    echo $num_rows;
}
function get_emp_at_work_no()
{
    $query=query("SELECT*FROM employee WHERE work_status='At Work' AND emp_role!='admin'");
   
    $num_rows=mysqli_num_rows($query);
    echo $num_rows;
}
function get_on_leave_no()
{
    $query=query("SELECT*FROM leave_applied WHERE leave_status='approved'");
   
    $num_rows=mysqli_num_rows($query);
    echo $num_rows;
}
function get_pending_leave_no()
{
    $query=query("SELECT*FROM leave_applied WHERE leave_status='Pending'");
   
    $num_rows=mysqli_num_rows($query);
    echo $num_rows;
}
function get_ending_leave_no()
{
    $query=query("SELECT*FROM employee WHERE work_status='Ending Leave' AND emp_role!='admin'");
   
    $num_rows=mysqli_num_rows($query);
    echo $num_rows;
}



function update_employee()
{
    if(isset($_POST['save']))
    {   global $connection;
        $user_emp_no=$_GET['emp_no'];
        $password=$_POST['password'];
        $user_emp_no = $_SESSION['emp_emp_no'];
        
        $query="UPDATE employee SET password='{$password}' WHERE emp_no='$user_emp_no' LIMIT 1";
        
        
        $update_emp=mysqli_query($connection,$query);
        confirm($update_emp);
        redirect("profile.php");
        
        
        
        
    }
}

function login_user(){

if(isset($_POST['login'])){

$user_emp_no = $_POST['emp_no'];
$password = $_POST['password'];
    
    
$query = query("SELECT*FROM employee WHERE emp_no = '{$user_emp_no}' AND password='{$password}'");
confirm($query);
while($row=fetch_array($query))
{
$emp_no = $row['emp_no'];
$password = $row['password'];
$fname = $row['firstname'];
$lname = $row['lastname'];
$emp_role = $row['emp_role'];
    

}
    
if(mysqli_num_rows($query) == 0) {

set_message("Your Password or Username are wrong");
redirect("login.php");


} else if($user_emp_no==$emp_no && $emp_role=='admin') 
{

 $_SESSION['admin_firstname'] = $fname;
 $_SESSION['admin_lastname']  = $lname;
 $_SESSION['admin_emp_no']    = $emp_no;


redirect("admin/");
}
else if($user_emp_no==$emp_no && $emp_role=='employee')
{

 $_SESSION['emp_firstname'] = $fname;
 $_SESSION['emp_lastname']  = $lname;
 $_SESSION['emp_emp_no']    = $emp_no;


redirect("./");
 }




    }



}
?>