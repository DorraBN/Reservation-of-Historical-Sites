<?php

include "configbd.php"; // Using database connection file here

$id=$_GET["id"]; // get id through query string

$del = mysqli_query($conn,"delete from destination where id_destination = '$id'"); // delete query

if($del)
{
    mysqli_close($conn);
     // Close connection
    header("location:tour packages.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>