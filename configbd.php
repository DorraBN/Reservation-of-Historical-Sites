<?php

// Establish database connection.
$conn = mysqli_connect('localhost', 'root', '', 'tms');
 
// Vérifier la connexion
if($conn === false){
    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
}
?>
