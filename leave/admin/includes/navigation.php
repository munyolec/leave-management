
 
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">EasyLeaveAdmin</a>
                 <a class="navbar-brand" href="../index.php">HOME</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
              
              
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo  $_SESSION['admin_firstname']; echo 
 $_SESSION['admin_lastname'] ;?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        
                       
                        <li>
                            <a href="includes/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="employees.php"><i class="fa fa-fw fa-user"></i>Employees</a>
                    </li>
                    <li>
                        <a href="register.php"><i class="fa fa-fw fa-user"></i>Register Employee</a>
                    </li>
                    <li>
                        <a href="leavesapplied.php"><i class="fa fa-fw fa-user"></i>Applied Leaves</a>
                    </li>
                     
                    
                  
                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>