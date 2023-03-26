<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client</title>
    <!-- Ajout de Bootstrap https://getbootstrap.com/docs/5.3/getting-started/download/-->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
               <a class="navbar-brand" href="accueil.php">gestCom</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
                
					<li class="nav-item">
						<a class="nav-link" href="Client.php">Client > </a>
					</li>
                    <li class="nav-item">
                        <a class="nav-link" href="../Exercice2/creationClient.php">Créer un client</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../Exercice2/afficherClient.php">Afficher les clients</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../Exercice2/rechercherClient.php">Rechercher un client</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<!-- 
    <div class="container mt-5">
        <h1 class="text-center mb-4">Gestion des clients</h1>
        <!-- Contenu de la page chargée par Ajax --><!-- 
    </div>-->

</body>
</html>
