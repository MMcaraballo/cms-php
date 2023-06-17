<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Registro</title>
</head>

<body>
    <div class="container-fluid register-login">
        <div class="row wrapper">
            <div class="col-lg padding-none bg-image-container">
                <div class="container__image">
                    <div class="image--points">

                    </div>
                </div>
            </div>
            <div class="col-lg form-center d-flex justify-content-center align-items-center">
                <div class="container-form">
                    <h1 class="register-login-h1">
                        Registro
                    </h1>
                    <p class="register-login-p">Por favor ingrese sus datos para crear su cuenta</p>

                    <form action="">
                        <div class="row">
                            <div class="col-lg">
                                <div class="form-group">
                                    <input type="text" name="firstname" required="required" id="firstname" class="form-control">
                                    <label for="firstname" class="form-label">Nombre</label>
                                </div>
                            </div>
                            <div class="col-lg">
                                <div class="form-group">
                                    <input type="text" name="username" required="required" id="username" class="form-control">
                                    <label for="username" class="form-label">Apodo</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="email" required="required" id="email" class="form-control">
                                <label for="email" class="form-label">Correo</label>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" required="required" id="password" class="form-control">
                                <label for="password" class="form-label">Contraseña</label>
                            </div>
                            <div class="form-group margin--bottom">
                                <input type="password" name="confirmpassword" required="required" id="confirmpassword" class="form-control">
                                <label for="confirmpassword" class="form-label">Confirmar contraseña</label>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="d-flex align-items-center">
                                    <input type="checkbox" class="form-check-input checked--form--input" id="remenber">
                                    <label for="remember" class="form-check-label order-2">Acepto los términos y condiciones</label>
                                    <label for="remember" class="label--checked order-1"></label>
                                </div>

                            </div>
                            <div class="d-flex justify-content-lg-center">
                                <button type="button" class="btn btn-signup--register align-self-center">Aceptar</button>
                            </div>
                            <a href="#" class="register-link--haveaccount">Ya tiene una contraseña? Entrar</a>
                        </div>
                </div>
            </div>
            </form>
        </div>
    </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>