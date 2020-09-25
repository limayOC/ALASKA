<!DOCTYPE html>
<html lang="fr">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Connexion</title>


</head>


<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Bienvenu!</h1>
                  </div>
                  <form class="user" method="POST" action="Login">
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="E-mail" name="email">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Pass" name="pass1">
                    </div>

                    <div class="form-group">
                      <input type="hidden" name="userType" class="form-control form-control-user" id="exampleInputPassword" value="">
                    </div>

                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck" >
                        <label class="custom-control-label" for="customCheck">Se souvenir de moi!</label>
                      </div>
                    </div>
                    <input type="submit" id="envoyer" class="btn btn-primary btn-user btn-block">
                      Connectez-vous
                    
                    <hr>
                    <a href="index.html" class="btn btn-google btn-user btn-block">
                      <i class="fab fa-google fa-fw"></i> Connectez-vous avec Google
                    </a>
                    <a href="index.html" class="btn btn-facebook btn-user btn-block">
                      <i class="fab fa-facebook-f fa-fw"></i> Connectez-vous avec Facebook
                    </a>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="index.php?action=createForgotPass">Mot de passe oublié?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="index.php?action=createLogView">Créer votre compte!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
  <?php $content = ob_get_clean(); ?>
  <?php require'template.php' ?>
</html>

