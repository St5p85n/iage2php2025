<?php
    require_once('bd.php');
    if(isset($_POST['ajouter'])){
        $nom =htmlspecialchars($_POST['titulaire']);
        $solde=htmlspecialchars($_POST['solde']);
        $sql = "INSERT INTO comptes (titulaire,solde) VALUES ('$nom',$solde)";
        $result =mysqli_query($conn,$sql);
        if($result){
           header('location:accueil.php');
        }else{
            header('location:add.php');
        }
        
    }
   function getAllComptes($conn){
        $sql = "SELECT * FROM comptes";
        $result = mysqli_query($conn,$sql);
        return $result;
   }
?>