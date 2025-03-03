<?php

    $servernmae="localhost";
    $username="root";
    $password="";
    $dbname="banque_db_iage2";
    $conn = mysqli_connect($servernmae,$username,$password,$dbname);
    if($conn){

        echo "Bien connecte";
    }else{
        echo "Connexion echou";
    }

?>