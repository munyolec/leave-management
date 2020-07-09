<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">EasyLeave</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                <li>
                        <a href='login.php'>Login</a>
                    </li>
                           
                
                    
                    <?php 
                    if(isset($_SESSION['admin_emp_no'] ))
                    {
                      echo "<li>
                        <a href='admin/index.php'>Admin</a>
                    </li> ";
                    }
                    
                    ?>
                  <?php
                   if(isset($_SESSION['emp_emp_no']))
                    {
                        $query=query("SELECT*FROM employee WHERE emp_no='{$_SESSION['emp_emp_no']}'");
                       confirm($query);
                   
                       
                
        $msg="SELECT * FROM messages WHERE emp_no='{$_SESSION['emp_emp_no']}' AND reading_status='Unread'";
                       $result_msg=mysqli_query($connection,$msg);
                       $rowcount=mysqli_num_rows($result_msg);
                       
                       
                   echo "
                   <li>
                            <a href='./admin/includes/logout.php'><i class='fa fa-fw fa-power-off'></i> Log Out</a>
                        </li>
                   <li class='dropdown'>
                        <a href='profile.php' class='dropdown-toggle' data-toggle='dropdown'><i class='fa fa-user'></i>{$_SESSION['emp_firstname']} {$_SESSION['emp_lastname']}</a>
                        <ul class='dropdown-menu'>
                         <li>
                            <a href='./leave.php?id={$_SESSION['emp_emp_no']}'><i class='fa fa-fw fa-user'></i>Apply for leave</a>
                            
                        </li> 
                        
                        </ul>
                    </li>
                    <li>
                    <a href='read_message.php?id={$_SESSION['emp_emp_no']}&reading_status=unread'><i class='fa fa-fw fa-user'></i>messages (".$rowcount.")</a>
                    
                    </li>
                      <li>
                            <a href='./profile.php?id={$_SESSION['emp_emp_no']}'><i class='fa fa-fw fa-user'></i> Profile</a>
                        </li> 
                    ";
                   }
                    ?>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>