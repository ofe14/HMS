<?php 
include "db_conn.php";
if(isset($_GET['deleteid']))
{
    $id = $_GET['deleteid'];

    $sql ="delete from `registration` where id ='$id'";
    $result =mysqli_query($conn,$sql);
    if($result)
    {
    header("location: manage.php");
    exit();
    }
    else
    {
        echo "failed to delete";
    }
}
?>