<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="./assets/css/css.css">
  <title>Intranet Poligono</title>
</head>
<body>
<div class="fullpage-senha">


        
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-4">
                    <div id="login-box" class="col-md-12">
                        <form id="login-novaSenha" class="form" action="<?php echo BASE_URL?>Home/novaSenha" method="post">
                                <h3 style="color: #fff">Troque a Senha</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Nova senha:</label><br>
                                <input type="password" name="senha1" id="senha1" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Nova Senha:</label><br>
                                <input type="password" name="senha2" id="senha2" class="form-control">
                            </div>
                            <div class="form-group">
                               
                                <input type="submit" id="enviar" name="submit" class="btn btn-info btn-md " disabled value="Enviar">
                            </div>
                            <div id="register-link" class="text-right">
                               
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    


</div>
        <nav class="jumbotron bg-primary mb-0 ">

        <div class="row">
        
          <a href="<?php echo BASE_URL ?>home/metodo" class="col text-white"> Um </a>
          <a href="<?php echo BASE_URL ?>home" class="col text-white"> Dois </a>
          <a href="<?php echo BASE_URL ?>home/Sair" class="col text-white"> Tres </a>
        
        </div>
        </nav>

<!-- Introduz as Views -->
<?php $this->loadViewInTemplate($viewName, $viewData); ?>








<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="./assets/js/js_senha.js"></script>
</body>
</html>