<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
    <script src="connexion.js"></script>
</head>

<body>
    <div class="container mt-5 card p-1" id="content" >
    <div class="text-center card-header w-100">
        <h1>Connexion</h1>
    </div>
        <div class="card-body">
        <form method="POST" action="login.php">
            <div class="form-group mt-4">
                <label for="login">Identifant</label>
                <input class="input-group input-group-prepend input-group-text" type="text" name="login" placeholder="Veuillez entrer un identifiant..">
            </div>
            <div class="form-group mt-4 input-group mb-3 ">
                <label for="password">Mot de passe </label>
                <input class="input-group input-group-text" type="text" name="password" placeholder="Veuillez entrer un mot de passe..">
            </div>
            
            <div class="d-flex justify-content-center">
                <button class="btn btn-primary mt-2">Se connecter</button>
            </div>
        </form>
    </div>
    </div>

</body>

</html>