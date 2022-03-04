<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Page d'inscription</title>
</head>
<body>
    <div id="register">
        <h3 class="text-center text-white pt-5">Inscription</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-form" class="col-md-12">
                        <form action="" id="login-form" class="form" method="post">
                            <h3 class="text-center text-info"></h3>
                            <div class="form-group">
                                <label for="nom" class="txt-info">Nom</label>
                                <input type="text" name="nom" id="nom" 
                                class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label for="prenom" class="txt-info">Prénom</label>
                                <input type="text" name="prenom" id="prenom"
                                class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label for="civilite" class="txt-info">Civilité</label>
                                <input type="text" name="civilite" id="civilite" 
                                class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label for="email" class="txt-info">Email</label>
                                <input type="email" name="email" id="email"
                                class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label for="motDePasse" class="txt-info">Mot de passe</label>
                                <input type="password" name="motDePasse" id="mdp"
                                class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label for="telephone" class="txt-info">Téléphone</label>
                                <input type="text" name="telephone" id="tel"
                                class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label for="poste" class="txt-info">Poste</label>
                                <input type="text" name="poste" id="poste"
                                class="form-control"/>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="RegisterSubmit" class="btn btn-info
                                btn-md" value="submit"/>
                            </div>
                            <div id="reg_link" class="text-right">
                                <a href="?registratio" class="text-info">Inscrivez-vous maintenant</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>