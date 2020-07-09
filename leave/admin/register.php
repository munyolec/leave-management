<?php include("includes/header.php"); ?>
              <body>
            
<!--Navigation-->
                   <?php include("includes/navigation.php"); ?>
                   <div class="container-fluid">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title" >Register employees</h1>
            <div class="account-wall" >
                  
                <form class="form-signin" method="post" action="">
                <?php add_employee();?>
                
                    <div class="container">
       
       <div class="col-sm-6">
          <form action="registration.php"method="POST">
              <div class="form-group">
              <label for="firstname" color="#FFFFFF">firstname</label>
               <input type="text"name="firstname" class="form-control">
              </div>
               <div class="form-group">
                 <label for="lastname">lastname</label>

               <input type="text" name="lastname" class="form-control">
              </div>
              <div class="form-group">
                 <label for="nationality">nationality</label>

               <input type="text" name="nationality" class="form-control">
              </div>
              <div class="form-group">
                 <label for="gender">gender</label>

               <input type="text" name="gender" class="form-control">
              </div>
              <div class="form-group">
                 <label for="ID number">Id number</label>

               <input type="number" name="id_no" class="form-control">
              </div>
              <div class="form-group">
                 <label for="Email">Email</label>

               <input type="text" name="email" class="form-control">
              </div>
               <div class="form-group">
                 <label for="Department">Department</label>

               <input type="text" name="department" class="form-control">
              </div>
              
               <div class="form-group">
                 <label for="Date of Admission">date of admission</label>

               <input type="datetime" name="doa" class="form-control">
              </div>
              <div class="form-group">
                 <label for="password">password</label>

               <input type="password" name="password" class="form-control">
              </div>
              <div class="form-group">
                 <label for="Telephone number">Telephone number</label>

               <input type="number" name="tel_no" class="form-control">
              </div>
              <div class="form-group">
                 <label for="Job title">Job title</label>

               <input type="text" name="job_title" class="form-control">
              </div>
              <div class="form-group">
                 <label for="photo">photo</label>

               <input type="file" name="photo" class="form-control">
              </div>
              <input class="btn btn-primary" type="submit" name="register" value="submit">
          </form>
           
           
       </div>
       
       
   </div>
                <label class="checkbox pull-left">
                    
                </label>
                
                </form>
                
            </div>
            
        </div>
    </div>
</div>
                   
              </body>
                
              