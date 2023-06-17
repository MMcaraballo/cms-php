<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Login</title>
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
                        Acceso
                    </h1>
                    <p class="register-login-p">Bienvenido, por favor ingresa tus credenciales</p>

                    <form action="">
                        <div class="form-group">
                            <input type="text" id="username" class="form-control" name="username" required>
                            <label for="username" class="form-label">Usuario</label>
                        </div>
                        <div class="form-group margin--bottom">
                            <input type="password" id="password" class="form-control" name="password" required>
                            <label for="password" class="form-label">Contraseña</label>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="d-flex align-items-center">
                                <input type="checkbox" class="form-check-input checked--form--input" id="remember">
                                <label for="remember" class="label--checked order-1">Recuérdame</label>
                            </div>
                            <a href="#" class="forgot__password--link">Olvidó su contraseña?</a>
                        </div>
                        <div class="d-flex justify-content-lg-between">
                            <button type="button" class="btn btn-login align-self-center">Entrar</button>
                            <button type="button" class="btn btn-signup align-self-center">Registrarme</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>