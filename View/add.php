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
                        <label class="form-label">Nom du Titulaire</label>
                        <input type="text" class="form-control" name="titulaire" required>
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Solde</label>
                        <input type="number" class="form-control" id="solde" name="solde" required><br>
                        <span id="soldeerror"></span>
                    </div>
             
                    <button type="submit" name="ajouter" class="btn btn-primary">Ajouter</button>
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