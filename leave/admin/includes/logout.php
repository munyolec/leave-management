<?php session_start();?>
<?php include "../../includes/function.php";?>
<?php
if(isset($_SESSION['admin_emp_no']))
{
 $_SESSION['admin_emp_no']=null;
redirect("../../index.php");
}
else if(isset($_SESSION['emp_emp_no']))
{
$_SESSION['emp_emp_no']=null;
redirect("../../index.php");
}
?>