<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Materialize - Navbar</title>
    <!-- Compiled and minified CSS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="./assets/css/css.css">
</head>

<body>
<div class="fullpage-senha">


    <!-- Troca de Senha -->


    <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col md4">
                    <div id="login-box" class="col md12">
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

    <!-- Fim troca de Senha -->


            <!-- Navebar -->
            <div class="navbar-fixed">
                <nav>
                    <div class="nav-wrapper blue darken-4">
                        <!-- Logo -->
                        <a href="#" class="brand-logo">Intranet</a>

                        <!-- Ícone para abrir no Mobile -->
                        <a href="#" data-target="mobile-navbar" class="sidenav-trigger">
                            <i class="material-icons">menu</i>
                        </a>

                        <ul id="navbar-items" class="right hide-on-med-and-down">
                            <li><a href="<?php echo BASE_URL?>Home">Inicio</a></li>
                            <li><a href="<?php echo BASE_URL?>Ti">TI-Chamados</a></li>
                            
                            <li><a href="#">Sobre</a></li>
                            <li>
                                <a class="dropdown-trigger" data-target="dropdown-menu" href="#">
                                    Contatos <i class="material-icons right">arrow_drop_down</i>
                                </a>
                            </li>
                        </ul>

                        <!-- Dropdown -->
                        <ul id="dropdown-menu" class="dropdown-content">
                            <li><a href="<?php echo BASE_URL?>Cad_user" class="indigo-text">Cadastro Usuario</a></li>
                            <li><a href="#" class="indigo-text">E-mail</a></li>
                            <li class="divider" class="indigo-text"></li>
                            <li><a href="#" class="indigo-text" class="indigo-text">Redes sociais</a></li>
                            <li><a href="<?php echo BASE_URL?>Ti" class="indigo-text">TI-Chamados</a></li>
                            <li><a href="<?php echo BASE_URL?>Home/sair" class="indigo-text">Sair</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
    
    <!-- Menu Mobile -->
    <ul id="mobile-navbar" class="sidenav">
        <div class="section">
            <li><a href="#">Usuario</a></li>
        </div>
        <div class="divider"></div>
        
        <li><a href="<?php echo BASE_URL?>Home">Inicio</a></li>
        <li><a href="<?php echo BASE_URL?>Cad_user" class="indigo-text">Cadastro Usuario</a></li>
        <li><a href="#">Sobre</a></li>
        <li><a href="#">Contatos</a></li>
        <li><a href="<?php echo BASE_URL?>Ti">TI-Chamados</a></li>
        <li><a href="<?php echo BASE_URL?>Home/sair">Sair</a></li>
    </ul>
    <?php $this->loadViewInTemplate($viewName, $viewData); ?>





    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="./assets/js/main.js"></script>
    <script src="./assets/js/js_senha.js"></script>
</body>

</html>