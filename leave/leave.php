<?php include("includes/header.php"); ?> 
<body>
    <?php leave_application();?>
    <!-- Navigation -->
   <?php include("includes/navigation.php"); ?>
    <?php
    
    $leave="SELECT * FROM leave_details ";
    $result1=mysqli_query($connection, $leave);
    
    
    ?>

    <!-- Page Content -->
    <div class="container">
     
<div class="container well" style="margin-top: 100px"> 
                            
<form action="" method="POST" name = "sampleform" enctype = "multipart/form-data">
      <div class="form-group">
                              
<div class="form_group">
          <label for="emp_no">Employee Number</label><br />
           <input type="text" name="emp_no"><br />
            <label for="leaves available">leaves available</label><br />
               
                <select name = "leave_name" class="selectpicker" data-style="btn-primary" onchange = "showLeaveDays(this.value)">
				<option value = "">Please Select</option>
                   <?php while($row1=mysqli_fetch_array($result1)):;?>
                  
                   <option value = "<?php echo $row1[1];?>"><?php echo $row1[1];?></option>
                   <?php endwhile;?>
                                 
                                  
                                   
                </select>
            </div><br />
                
            <div class="form-group">
               <input name = "start_date" /><a href = "javascript:showCal('Calendar1')">Select Start Date</a>
               <input name = "start_end" /><a href = "javascript:showCal('Calendar2')">Select End Date</a>
<!--               <script>
                   $('input#date').datepicker();
                </script>
 -->             
                
            </div>
            
            <div class="form-group">
               <label for="number of available days">Available days</label>
                <div id = "txtHint"><input type="number" class="form-control" placeholder disabled></div>
            </div>
            <div class="form-group">
                <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">
                    Apply</button>
            </div>
</form>


  </div>


   

   

<?php include("includes/footer.php");?>