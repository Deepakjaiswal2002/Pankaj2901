<?php>
  
  //Include constants.php file here
  include('../config/constants.php');

  //1.get the id  of admin to be deleted
  $id = $_GET['id'];
    
  //2.Create SQL Query to delete admin
  $sql = "DELETE FROM tbl_admin WHERE id=$id";

  //Execute the query
  $res =mysqli_query($conn, $sql);
  
  //Check whether the query executed successfully or not
  if($res==true) 
  {
     //Query executed successfully and admin  deleted 
      //echo "Admin Deleted";
     //Create session veriable to display message
    $_SESSION['delete'] = "<div class='success'>Admin Deleted Successfully</div>";
    //Redirect to Menage admin page
    header('location:'.SITEURL.'admin/manage-admin.php');
  }
  else
  {
     //Failed to delete admin
     //echo "Failed To Delete Admin";

     $_SESSION['delete'] = "<div class='error'>Failed to delete admin.Try again later.</div>";
     header('location:'.SITEURL.'admin/manage-admin.php');
  }     

  //3.Rediret to msnsge admin page with message (success/error) 




<?>
