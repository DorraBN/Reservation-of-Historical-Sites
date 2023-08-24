<?php

include "configbd.php"; // Using database connection file here

$id=$_GET["id"]; // get id through query string

$del = mysqli_query($conn,"update  reservation set valid_reserv='cancelled' where num_reserv = '$id'"); // delete query

if($del)
{
    mysqli_close($conn); // Close connection
    header("location:manage booking.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error "; // display error message if not delete
}
?>