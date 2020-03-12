
<div class="container  mt-0">

<div id="login">
        <div class="container ">
            <div id="login-row" class="row justify-content-center align-items-center ">
                <div id="login-column" class="col-md-4 bg-primary ">
        <h1 class="text-center text-white pt-5">Intranet</h1>
                    <div id="login-box" class="col-md-12 ">
                        <form id="login-form" class="form" action="<?php echo BASE_URL?>Login/Action_login" method="post">
                         
                            <div class="form-group">
                                <label for="username" class="text-white">Usuario:</label><br>
                                <input type="email" name="email" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-white">Senha:</label><br>
                                <input type="text" name="senha" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                               
                                <input type="submit" name="submit" class="btn btn-primary btn-md" value="Enviar">
                            </div>
                            <div id="register-link" class="text-right">
                               
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php 

  



?>





</div>