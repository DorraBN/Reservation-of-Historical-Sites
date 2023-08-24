

 


<?php
include "configbd.php";
 // Vérifier si l'ID est défini dans la requête
    $id = $_GET['id']; // Récupérer l'ID de l'enregistrement à supprimer

    $del = mysqli_query($conn, "DELETE FROM utilisateur WHERE telephone = '$id'"); // Exécuter la requête de suppression

    if ($del) {
        mysqli_close($conn); // Fermer la connexion à la base de données
        header("location: manage users.php"); // Rediriger l'utilisateur vers la page de gestion des utilisateurs
        exit;
    } else {
        echo "Error deleting record: " . mysqli_error($conn); // Afficher l'erreur SQL en cas d'échec de la suppression
    }

?>