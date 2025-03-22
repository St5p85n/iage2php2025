<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../Public/styles/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<?php
    require_once('menu.php');
?>
<!-- Debut du formulaire-->
 <div class="container">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
            <form method="post" action="../Controller/traitement.php">
                    <div class="mb-3">
                        <?php 
                            require_once("../Controller/traitement.php");
                            $id = $_GET['idM'];
                            $compteUpdate =getCompte($id) ;
                        ?>
                        <label class="form-label">Modifier Le Nom du Titulaire Numero <?php echo $id; ?> </label>
                        <input type="text" class="form-control" value="<?php echo $compteUpdate['titulaire']; ?>" name="titulaire" required>
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Nouveau Solde</label>
                        <input type="number" value="<?php echo $compteUpdate['solde']; ?>" class="form-control" id="solde" name="solde" required><br>
                        <span id="soldeerror"></span>
                    </div>
                    <div class="mb-3">
                        <input type="hidden" name="id" value="<?php echo $compteUpdate['id']; ?>">
                    </div>
                    <button type="submit" name="modifier" class="btn btn-primary">Modifier</button>
                    </form>
            </div>
        </div>
    </div>
 </div>
<!-- Fin du formulaire-->

<!-- Pied de page debut-->
 <?php
    require_once('footer.php');
 ?>
 <!-- Pied de page fin-->
<script src="../Public/js/script.js"></script>
</body>
</html>