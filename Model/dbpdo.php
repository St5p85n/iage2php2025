<?php

  
    function openConnection(){
        $host = "localhost";
        $dbname="banque_db_iage2";
        $username="root";
        $pasword="";
        try {
            $conn = new PDO("mysql:host=$host;dbname=$dbname",$username,$pasword);
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
            return $conn;
            //echo "Bien connecte";
            /*
                INSERTION
            $sql = "INSERT INTO etudiant (nom,age) VALUES (?,?)";//creation de la requete
            $preparation = $conn->prepare($sql);//preparation de la requete
            $preparation->execute(["Fatourma",18]);//execution de la requet
            */

            /*
                MODIFICATION
            $sql = "UPDATE etudiant SET nom=? WHERE id=?";//creation de la requete
            $preparation = $conn->prepare($sql);//preparation de la requete
            $preparation->execute(["Ramata",3]);//execution de la requet
            */
            /*
                SELECTION UNE INFORMATION UNIQUE OU PLUSIEUR
            $sql = "SELECT * FROM etudiant WHERE id=?";//creation de la requete
            $preparation = $conn->prepare($sql);;//preparation de la requete
            $preparation->execute([3]);//execution de la requet
            $etu = $preparation->fetch();
            echo  $etu['age'];
            */

            /*
                SELECTIONNER TOUT LES ELEMENTS
            $sql = "SELECT * FROM etudiant";//creation de la requete
            $excution = $conn->query($sql);//execution de la requet
            $etudiants = $excution->fetchAll();
            foreach ($etudiants as $etu) {
                echo $etu['nom']."<br>";
            }*/
            /*
                SUPRESSION
            $sql = "DELETE FROM etudiant WHERE id=?";;//creation de la requete
            $preparation = $conn->prepare($sql);//preparation de la requete
            $preparation->execute([3]);//execution de la requet
            */

        } catch (PDOException $e) {
            die("Probleme ".$e->getMessage());
            
        }
    }
    
    function saveCompte($nom,$solde){
        $sql = "INSERT INTO comptes (titulaire,solde) VALUES (?,?)";
        $conn = openConnection();
        $preparation = $conn->prepare($sql);
        $preparation->execute([$nom,$solde]);
        return 1;
    }
    function findConptes(){
        $sql = "SELECT * FROM comptes";
        $conn = openConnection();
        $result = $conn->query($sql);
        return $result;
    }
    function deleteCompte($id){
        $sql = "DELETE FROM comptes WHERE id = ?";
        $conn = openConnection();
        $preparation = $conn->prepare($sql);
        $preparation->execute([$id]);
        return 1;
    }
    
    function getCompteByID($id){
        $sql = "SELECT * FROM comptes WHERE id=?";
        $conn = openConnection();
        $preparation = $conn->prepare($sql);
        $preparation->execute([$id]);
        $result = $preparation->fetch();
        return $result;
    }
    function updateCompte($nom,$solde,$id){
        $conn = openConnection();
        $sql = "UPDATE comptes SET titulaire=?,solde=? WHERE id=?";
        $preparation = $conn->prepare($sql);
        $preparation->execute([$nom,$solde,$id]);
        return 1;
    }


?>