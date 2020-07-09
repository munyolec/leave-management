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
                           Leave Applications
                        </h1>
                        
                    </div>
                </div>
                <table class="table table-bordered  table-hover">
                             <thead>
                                 <tr>
                                     <th>Names</th>
                                                                 
                                     <th>Leave Type</th>
                                     
                                     <th>Date From</th>
                                     <th>Date To</th>
                                     <th>Leave_status</th>
                                     <th>Approve</th>
                                     <th>Reject</th>
                                 </tr>
                             </thead>
                             <tbody>
                             <form action="quick_process_leave.php" method="POST">
                             <?php
                           $query=query("SELECT*FROM leave_applied INNER JOIN employee ON leave_applied.emp_no=employee.emp_no");
                                confirm($query);
                                while($row=fetch_array($query))
                                {
                                    $fname = $row['firstname'];
                                    $lname = $row['lastname'];
                                    $leave_name=$row['leave_name'];
                                    $start_date=$row['start_date'];
                                    $start_end=$row['start_end'];   
                                    $leave_status=$row['leave_status'];
                                    $emp_no=$row['emp_no'];
                                    
                                   
                                    
                                    echo "<tr>";
                                    echo "<td>{$fname} {$lname}</td>";
                                    echo "<td>{$leave_name}</td>";
                                    
                                    echo "<td>{$start_date}</td>";
                                    echo "<td>{$start_end}</td>";
                                     
                                
                                       if($leave_status=='Pending')
                                    {
                                        echo "<td><span class='label label-warning'>{$leave_status}</span></td>";
                                    } 
                                    if($leave_status=='approved')
                                    {
                                        echo "<td><span class='label label-success'>{$leave_status}</span></td>";
                                    } if($leave_status=='rejected')
                                    {
                                        echo "<td><span class='label label-danger'>{$leave_status}</span></td>";
                                                         
                                    }
                                      
                                   
                                    echo "<td><a href ='quick_process_leave.php?emp_no={$emp_no}&status=approved'>Approve</a></td>";
                                    echo "<td><a href ='quick_process_leave.php?emp_no={$emp_no}&status=rejected'>Reject</a></td>";
                                      echo "</tr>";
                                      
                                }

                                    ?>
                                    
                    </form>
                                    
                                    
                            
                             </tbody>
                         </table> 
            
            
            </div>
        </div>

        
        
        <?php include("includes/footer.php");?>