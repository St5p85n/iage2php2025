<?php
    require_once('../Model/dbpdo.php');
    if(isset($_POST['ajouter'])){
        $nom =htmlspecialchars($_POST['titulaire']);
        $solde=htmlspecialchars($_POST['solde']);
        $result = saveCompte($nom,$solde);
        if($result){
           header('location:../View/accueil.php');
        }else{
            header('location:../View/add.php');
        }
        
    }

    if(isset($_POST['modifier'])){
        $nom =htmlspecialchars($_POST['titulaire']);
        $solde=htmlspecialchars($_POST['solde']);
        $id = $_POST['id'];

        $result = updateCompte($nom,$solde,$id);
        if($result){
           header('location:../View/accueil.php');
        }else{
            header('location:../View/editer.php');
        }
        
    }

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $result = deleteCompte($id);
        if($result==TRUE){
            header('location:../View/accueil.php');
        }else{
            echo "L id n'existe pas";
        }
    }
   function getAllComptes(){
        $result = findConptes();
        return $result;
   }
   function getCompte($id){
        $compte = getCompteByID($id);
        return $compte;
   }
?>