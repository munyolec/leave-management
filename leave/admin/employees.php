<?php include("includes/header.php");?>
<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include("includes/navigation.php");?>
        <div id="page-wrapper">

            <div class="container-fluid">
              <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Employees
                        </h1>
                        
                    </div>
                </div>
                <table class="table table-bordered  table-hover">
                             <thead>
                                 <tr>
                                     <th>Names</th>
                                     <th>Gender</th>
                                     <th>Job Title</th>
                                     <th>Email</th>
                                  
                                     <th>TelNo</th>
                                     <th>Department</th>
                                     <th>Status</th>
                                 </tr>
                             </thead>
                             <tbody>
                             <?php
                                 //Select All employees
                                 
                                 if(isset($_GET['pending']))
                                 {
                                     get_pending_details();
                                 }
                                 else if(isset($_GET['approved']))
                                 {
                                     get_approved_details();
                                 }
                                 else
                                 {
  $query=query("SELECT*FROM employee WHERE emp_role!='Admin' ");
                                confirm($query);
                                while($row=fetch_array($query))
                                {
                                    $fname = $row['firstname'];
                                    $lname = $row['lastname'];
                                    $email = $row['email'];
                                    $gender=$row['gender'];
                                    $tel_no=$row['tel_no'];
                                    $department = $row['department'];
                                    $job_title = $row['job_title'];
                                    $work_status = $row['work_status'];
                                    $leave_status=['leave_status'];
                                    
                                    
                                   
                                    
                                    echo "<tr>";
                                    echo "<td>{$fname} {$lname}</td>";
                                     echo "<td>{$gender}</td>";
                                    echo "<td>{$job_title}</td>";
                                    echo "<td>{$email}</td>";
                                    echo "<td>{$tel_no}</td>";
                                    echo "<td>{$department}</td>";  
                                    
                                   
                                    
                                             
                             
                                    
                                    
                                   
                             
                                    
                                    if($work_status=='At Work')
                                    {
                                        echo "<td><span class='label label-primary'>{$work_status}</span></td>";
                                    } 
                                    if($work_status=='approved')
                                    {
                                        echo "<td><span class='label label-success'>{$work_status}</span></td>";
                                    } if($work_status=='Pending')
                                    {
                                        echo "<td><span class='label label-warning'>{$work_status}</span></td>";
                                    } 
                                    if($work_status=='Ending Leave')
                                    {
                                        echo "<td><span class='label label-info'>{$work_status}</span></td>";
                                    }
                                    if($work_status=='Exceeded Leave')
                                    {
                                        echo "<td><span class='label label-danger'>{$work_status}</span></td>";
                                    }
                                    
                                    
                                 
                                    
                                  
                                    
                                    
                                   
                                }
                                 }
                                ?>
                                   
                                  
                             </tbody>
                         </table> 
            
            
            </div>
        </div>

        
        
        <?php include("includes/footer.php");?>