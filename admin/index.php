<?php

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.1/animate.css">
  </head>
  <body>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well login-box">
                <form action="loggedin.php" method="post">
                    <legend>Acceso</legend>
                    <div class="form-group">
                        <label for="username-email">Usuario</label>
                        <input value='' id="username-email" name="username" placeholder="Usuario" type="text" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        <input id="password" value='' name="password" placeholder="Contraseña" type="text" class="form-control" />
                    </div>
                    <div class="form-group text-center">
                        <input type="submit" class="  btn btn-success btn-login-submit" value="Entrar" />
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
  </body>
</html>
