<?php
include("includes/header.php"); ?>

              <body>
<!--Navigation-->
                   <?php include("includes/navigation.php"); ?>
                   <div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
           
            <h1 class="text-center login-title">Sign in to continue to EasyLeave</h1>
            <div class="account-wall">
                <img class="profile-img" src="uploads/logo.png"
                    alt="">
                
                <form class="form-signin" method="post">
                
                <?php
                    echo "$_SESSION['driver_name']";
                    display_message();
                    login_user(); ?>
                <input type="text" class="form-control" placeholder="Emp No"  name="emp_no">
                <input type="password" class="form-control" name="password" placeholder="Password" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">
                    Sign in</button>
                <?php echo "$_SESSION['driver_name']";
                    ?>
                
                </form>
            </div>
            
    </div>
</div>
                   
              </body>
              
              

              