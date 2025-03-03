<?php
    require_once('bd.php');
    $id = $_GET['id'];
    $sql = "DELETE FROM comptes WHERE id = $id";
    $result = mysqli_query($conn,$sql);
    if($result==TRUE){
        header('location:accueil.php');
    }else{
        echo "L id n'existe pas";
    }

?>