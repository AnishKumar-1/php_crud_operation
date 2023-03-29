<?php
include('connection.php');
$id=$_GET['deleteid'];
$sql="delete from students where id=$id";
if(mysqli_query($con,$sql))
{
    header('location:display.php');
}
?>