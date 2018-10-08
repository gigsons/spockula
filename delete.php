<?php
include("database/db_conection.php");
$UserID=$_GET['UserID'];
$delete_query="DELETE  from users WHERE id='$UserID'";//delete query
$run=mysqli_query($dbcon,$delete_query);
if($run)
{
//javascript function to open in the same window
    echo "<script>window.open('view_users.php?deleted=user has been deleted','_self')</script>";
}

?>