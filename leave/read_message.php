<?php
//connect database
include("includes/header.php");
include("includes/navigation.php")
?>
<div id="wrapper">
<div class="container-fluid">
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Messages</h1>
    </div>
</div>

<?php
 if($_GET["reading_status"]){
                    
     $reading_status=$_GET["reading_status"];
                    
if($reading_status=='unread'){
  
 $query=query("SELECT*FROM messages WHERE reading_status='unread'");
                        
                        if(!$query)
                        {
                            die('QUERY FAILED' . mysqli_error($connection));
                        }
    
       
}
 }
 
?>


<div class="container">
    <div class="row">
        
        <div class="col-sm-9 col-md-10">
            <!-- Split button -->
            <button type="button" class="btn btn-default" data-toggle="tooltip" title="Refresh">
                &nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-refresh"></span>&nbsp;&nbsp;&nbsp;</button>
            <!-- Single button -->
                      
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-9 col-md-10">          
            <div class="tab-content">
                <div class="tab-pane fade in active" id="home">
                    <div class="list-group">
                       <?php
                        while($row=fetch_array($query)){
            $send_date=$row['send_date'];
            $message_subject=$row['message_subject'];
            $message=$row['message'];
              
            
       
        

                        echo "
                        <a href='clear_message.php?&reading_status=Unread'class='list-group-item'>
                            <div class='checkbox'>
                                <label>
                                    <input type='checkbox'>
                                </label>
                            </div>
                            <span class='glyphicon glyphicon-star-empty'></span><span class='name' style='min-width: 120px;
                                display: inline-block;'>Admin</span> <span class=''>"; echo"{$message_subject}<br />

                            </span>";
                                echo"
                            <span class='text-muted' style='font-size: 11px;'>";echo"{$message};</span> <span class='badge''> {$send_date}</span> <span class='pull-right'>
                                </span></span></a>";
                        }
                          ?>          
        </div>
    </div>
</div>