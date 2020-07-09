<?php
//connection database
include("includes/db.php");
if($_GET["reading_status"]){
    $reading_status=$_GET["reading_status"];
  
    if ($reading_status=='Unread'){
    $del_art = "DELETE FROM messages WHERE reading_status= 'Unread' LIMIT 1";
        $register=mysqli_query($connection,$del_art);
                        
                        if(!$register)
                        {
                            die('QUERY FAILED' . mysqli_error($connection));
                        }
         header ("Location: index.php");
                        exit();
    }
}



?>