<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>

<?php
    require_once('menu.php');

?>
<!-- Liste des comptes debut-->
<div class="container">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-7">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#NUM</th>
                    <th scope="col">Nom du titulaire</th>
                    <th scope="col">Solde Actuel</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        require_once('bd.php');
                        require_once('traitement.php');
                        $liste = getAllComptes($conn);
                        $i=0;
                        while($row = mysqli_fetch_assoc($liste)){
                            $i++;
                            $id =$row['id'];
                            echo "<tr>";
                            echo "<td>".$i."</td>";
                            echo "<td>".$row['titulaire']."</td>";
                            echo "<td>".$row['solde']."</td>";
                            echo "<td><a href='delete.php?id=$id' class='btn btn-danger'>Sup</a></td>";
                            echo   "</tr>";
                        }
                    ?>
                </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Liste des comptes fin-->
<!-- Pied de page debut-->
<?php
    require_once('footer.php');
 ?>
 <!-- Pied de page fin-->
</body>
</html>