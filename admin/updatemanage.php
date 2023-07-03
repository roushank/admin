<?php
include('../constant/connect.php');
    
    
   $title=$_POST['app_title'];
   $stitle=$_POST['app_stitle'];
   $logo=$_POST['app_logo'];
   $curreny_code=$_POST['app_curreny_code'];
   $currency_symbol=$_POST['app_currency_symbol'];
   
    
    $query1="update manage_website set title='".$title."',short_title='".$stitle."',logo='".$logo."',currency_code='".$curreny_code."',currency_symbol='".$currency_symbol."'";
    //echo $query1;exit;

   if(mysqli_query($con,$query1)){
     
            echo "<html><head><script>alert('Updated Successfully');</script></head></html>";
            echo "<meta http-equiv='refresh' content='0; url=manage.php'>";  
   }
   else{
    echo "<html><head><script>alert('ERROR! Update Opertaion Unsucessfull');</script></head></html>";
    echo "error".mysqli_error($con);
   }
    

?>
