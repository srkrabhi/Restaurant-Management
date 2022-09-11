<?php 

 
    include('../config/constants.php');

   
    $id = $_GET['id'];

    $sql = "DELETE FROM tbl_order WHERE id=$id";

    
    $res = mysqli_query($conn, $sql);


    if($res==true)
    {
        
        $_SESSION['delete'] = "<div class='success'>Order Deleted Successfully.</div>";
        
        header('location:'.SITEURL.'admin/manage-order.php');
    }
    else
    {
        

        $_SESSION['delete'] = "<div class='error'>Failed to Delete Order. Try Again Later.</div>";
        header('location:'.SITEURL.'admin/manage-order.php');
    }

    

?>