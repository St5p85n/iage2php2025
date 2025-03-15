<?php

    function openConnection(){
        $servernmae="localhost";
        $username="root";
        $password="";
        $dbname="banque_db_iage2";
        $conn = mysqli_connect($servernmae,$username,$password,$dbname);
        return $conn;
    }
    function saveCompte($nom,$solde){
        $sql = "INSERT INTO comptes (titulaire,solde) VALUES ('$nom',$solde)";
        $conn = openConnection();
        $result =mysqli_query($conn,$sql);
        return $result;
    }
    function findConptes(){
        $sql = "SELECT * FROM comptes";
        $conn = openConnection();
        $result = mysqli_query($conn,$sql);
        return $result;
    }
    function deleteCompte($id){
        $sql = "DELETE FROM comptes WHERE id = $id";
        $conn = openConnection();
        $result = mysqli_query($conn,$sql);
        return $result;
    }
    function getCompteByID($id){
        $sql = "SELECT * FROM comptes WHERE id=$id";
        $conn = openConnection();
        $result = mysqli_query($conn,$sql);
        return $result;
    }
    function updateCompte($nom,$solde,$id){
        $conn = openConnection();
        $sql = "UPDATE comptes SET titulaire='$nom',solde=$solde WHERE id=$id";
        $result = mysqli_query($conn,$sql);
        return $result;
    }

?>