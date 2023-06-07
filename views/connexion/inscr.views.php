<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inscription</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<section class="vh-90 gradient-custom">
        <div class="containerpy-5 h-90">
            <div class="row d-flex justify-content-center align-items-center h-90">
                <div class="col-md-7 col-lg-7">
                    <h4 class="mb-3" style="text-decoration: underline;">Inscription</h4>
                    <form class="needs-validation" novalidate>
                        <div class="row g-3">
                            <div class="col-sm-5">
                                <label for="firstName" class="form-label">Nom complet</label>
                                <input type="text" class="form-control" id="nom"  required>
                            </div>

                            <div class="col-sm-5">
                                <label for="firstName" class="form-label">Numéro de téléphone</label>
                                <input type="text" class="form-control" id="numtel"  required>
                            </div>

                            <div class="col-sm-5">
                                <label for="firstName" class="form-label">mot de passe</label>
                                <input type="password" class="form-control" id="mdp"  required>
                            </div>
                            <div class="col-sm-5">
                                <label for="firstName" class="form-label">confirmer le mot de passe</label>
                                <input type="password" class="form-control" id="Cmdp"  required>
                            </div>

                            <div class="col-5">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="you@example.com">
                                <div class="invalid-feedback">
                                    entrer une adresse valide
                                </div>
                            </div>

                            <div class="col-sm-10">
                                <label for="bio" class="form-label">biographie</label>
                                <br>
                                <textarea name="bio" id="bio" cols="100" rows="5"></textarea>
                            </div>

                            <div class="col-10">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control" id="address" required>
                            </div>
                        </div>
                        <center>
                            <hr class="my-3">
                            <button class="w-90 btn btn-primary btn-lg" type="submit">S'inscrire</button>
                        </center>                      
                    </form>
                </div>
                </div>
            </div>
        </div>
</section>
</body>
</html>