<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
      <!-- Ajout de Bootstrap https://getbootstrap.com/docs/5.3/getting-started/download/-->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container border border-3 rounded-3 p-4">
        <h1 class="text-center mt-5 mb-4">Page d'accueil</h1>
        <div class="row">
            <div class="col-md-4 text-center">
                <a href="Client.php">
                    <img src="images/client.png" alt="Client" class="img-thumbnail" width="100" height="100">
                    <h3>Client</h3>
                </a>
            </div>
            <div class="col-md-4 text-center">
                <a href="Commande.php">
                    <img src="images/commande.png" alt="Commande" class="img-thumbnail" width="100" height="100">
                    <h3>Commande</h3>
                </a>
            </div>
            <div class="col-md-4 text-center">
                <a href="Produit.php">
                    <img src="images/produit.png" alt="Produit" class="img-thumbnail" width="100" height="100">
                    <h3>Produit</h3>
                </a>
            </div>
        </div>
    </div>


</body>
</html>
