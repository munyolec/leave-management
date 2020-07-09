<?php include("includes/header.php"); ?>

<body>

    <!-- Navigation -->
   <?php include("includes/nav2.php"); ?>


    <!-- Page Content -->
    <div class="container">
<?php

        $query=query("SELECT*FROM employee WHERE emp_no='{$_SESSION['emp_emp_no']}' ");
        confirm($query);
        while($row=fetch_array($query))
        {
                        $firstname=$row['firstname'];                        
                        $lastname=$row['lastname'];                       
                        $doa=$row['doa'];
                        $job_title=$row['job_title'];
                        $email=$row['email'];
                        $tel_no=$row['tel_no'];
                        $gender=$row['gender'];
                        $user_emp_no=$row['emp_no'];
                        $password=$row['password'];
        
  }
        
        
?>
    
        <!-- /.row -->
        <div class="account-wall">
               <h1 class="text-center">Your Details</h1>
                <img class="profile-img" src="uploads/create_thumb.png"
                    alt="">
                
            <form class="form-horizontal" method="post">
            <?php update_employee(); ?>
  <div class="form-group">
    <label for="first_name"   class="col-sm-2 control-label">First Name</label>
    <div class="col-md-4">
      <input type="text" class="form-control" name="firstname" value="<?php echo $firstname;?>" placeholder="First Name" disabled>
    </div>
  </div>
  <div class="form-group">
    <label for="last_name" class="col-sm-2 control-label">Last Name</label>
    <div class="col-md-4">
      <input type="text" class="form-control" name="lastname" value="<?php echo $lastname;?>" placeholder="Last Name" disabled>
    </div>
  </div>   
   <div class="form-group">
    <label for="DateRecruited" class="col-sm-2 control-label">Date of admission</label>
    <div class="col-md-4">
      <input type="text" class="form-control" name="doa" value="<?php echo $doa;?>" placeholder="Date of admission" disabled>
    </div>
  </div>
    <div class="form-group">
    <label for="Address" class="col-sm-2 control-label">Gender</label>
    <div class="col-md-4">
      <input type="text" class="form-control" name="Gender" value="<?php echo $gender;?>" placeholder="Address" disabled>
    </div>
  </div> 
   <div class="form-group">
    <label for="Email" class="col-sm-2 control-label">Email</label>
    <div class="col-md-4">
      <input type="email" class="form-control" name="email" value="<?php echo $email;?>" placeholder="Email" disabled>
    </div>
  </div>
  <div class="form-group">
    <label for="mobile_no" class="col-sm-2 control-label">Telephone No</label>
    <div class="col-md-4">
      <input type="text" class="form-control" name="tel_no" value="<?php echo $tel_no;?>" placeholder="telephone number" disabled>
    </div>
  </div>
   <div class="form-group">
    <label for="Soldier Rank" class="col-sm-2 control-label">job title</label>
    <div class="col-md-4">
      <input type="text" class="form-control" name="job_title" value="<?php echo $job_title;?>" placeholder="Soldier_Rank" disabled>
    </div>
  </div><div class="form-group">
    <label for="mobile_no" class="col-sm-2 control-label">Username</label>
    <div class="col-md-4">
      <input type="text" class="form-control" name="username" value="<?php echo $user_emp_no;?>" placeholder="Username" disabled>
    </div>
  </div><div class="form-group">
    <label for="mobile_no" class="col-sm-2 control-label">Password</label>
    <div class="col-md-4">
      <input type="password" class="form-control" name="password" value="<?php echo $password;?>" placeholder="Password">
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="save" class="btn btn-primary">Save</button>
    </div>
  </div>
</form>
            </div>


   

   

<?php include("includes/footer.php");?>