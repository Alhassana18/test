<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulaire d'insertion de données</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
  <h2 class="mt-5 mb-4">Formulaire d'insertion de données</h2>
  <div class="card mb-4">
    <div class="card-body">      
  <h2 class="card title">Inscrire un utilisateur</h2>
  <form action="insert.php" method="post">
    <div class="form-group">
      <label for="exampleInputUsername">Nom d'utilisateur</label>
      <input type="text" class="form-control" id="exampleInputUsername" placeholder="Entrez votre nom d'utilisateur">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword">Mot de passe</label>
      <input type="password" class="form-control" id="exampleInputPassword" placeholder="Entrez votre mot de passe">
    </div>
    <button type="submit" class="btn btn-primary">Inscrire utilisateur</button>
  </form>
</div>
</div> 

<!-- formulaire pour inscription -->
  <div class="card mb-4">
    <div class="card-body">      
  <h2 class="card title">Inscription</h2>
  <form action="insert.php" method="post">
    <div class="form-group">
      <label for="numero_membre">Nom</label>
      <input type="text" class="form-control" name="nom" id="nom">
    </div>
    <div class="form-group">
      <label for="nom">Prenom</label>
      <input type="text" class="form-control" name="prenom" id="prenom">
    </div>
    <div class="form-group">
      <label for="nom">INE</label>
      <input type="text" class="form-control" name="ine" id="ine">
    </div>
    <div class="form-group">
      <label for="nom">Filiere</label>
      <input type="text" class="form-control" name="filiere" id="filiere">
    </div>
    <div class="form-group">
      <label for="nom">Classe</label>
      <input type="text" class="form-control" name="classe" id="classe">
    </div>
    <div class="form-group">
      <label for="nom">DateNaissance</label>
      <input type="text" class="form-control" name="datenaissance" id="datenaissance">
    </div>
    <div class="form-group">
      <label for="nom">DateInscription</label>
      <input type="text" class="form-control" name="dateinscription" id="dateinscription">
    </div>
    <button type="submit" class="btn btn-primary">Inscription</button>
  </form>
</div>
</div>
</div>

<!-- formulaire pour ajouter membre -->
<div class="card mb-4">
    <div class="card-body">      
  <h2 class="card title">Ajouter un membre</h2>
  <form action="insert.php" method="post">
    <div class="form-group">
      <label for="numero_membre">Numero de membre</label>
      <input type="text" class="form-control" name="numero_membre" id="numero_membre">
    </div>
    <div class="form-group">
      <label for="nom">Nom</label>
      <input type="text" class="form-control" name="nom" id="nom">
    </div>
    <div class="form-group">
      <label for="nom">Prenom</label>
      <input type="text" class="form-control" name="prenom" id="nom">
    </div>
    <div class="form-group">
      <label for="nom">INE</label>
      <input type="text" class="form-control" name="ine" id="ine">
    </div>
    <div class="form-group">
      <label for="nom">Filiere</label>
      <input type="text" class="form-control" name="filiere" id="filiere">
    </div>
    <div class="form-group">
      <label for="nom">classe</label>
      <input type="text" class="form-control" name="filiere" id="filiere">
    </div>
    <div class="form-group">
      <label for="nom">ddn</label>
      <input type="text" class="form-control" name="filiere" id="filiere">
    </div>
    <button type="submit" class="btn btn-primary">Ajouter membre</button>
  </form>
</div>
</div>
</div>

<!-- formulaire pour livre -->
<div class="card mb-4">
            <div class="card-body">
                <h2 class="card-title">Ajouter un livre</h2>
                <form action="insert.php" method="post">
                    <div class="form-group">
                        <label for="numbIsbn">ISBN:</label>
                        <input type="text" class="form-control" name="numbIsbn" id="numbIsbn">
                    </div>
                    <div class="form-group">
                        <label for="titre">Titre:</label>
                        <input type="text" class="form-control" name="titre" id="titre">
                    </div>
                    <div class="form-group">
                        <label for="auteur">Auteur:</label>
                        <input type="text" class="form-control" name="auteur" id="auteur">
                    </div>
                    <button type="submit" class="btn btn-primary">Ajouter Livre</button>
                </form>
            </div>
        </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
