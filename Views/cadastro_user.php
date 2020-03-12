

<div id="login">
        
            <div id="login-row" class="row justify-content-center align-items-center ">
            <div class="col m2"></div>
                <div id="login-column" class="col s12 m4 bg-primary ">
                    <h3 class="text-center  pt-5">Cadastro de Usuário</h3>
                    <div id="login-box" class="col s12 m12 ">
                        <form id="login-form" class="form" action="<?php echo BASE_URL?>Cad_user/usuario" method="post">
                             <!-- select -->
                             <div class="form-group">
                                 <label>Departamento</label>
                                     <div class="input-field col12 s12">
                                <select class="browser-default" name="dep">
                                    <option value="" disabled selected>Departamento</option>
                                    <?php foreach ($dp as $key => $value){?>
                                        <option value="<?php echo $value['departamento'];?>"><?php echo $value['departamento'];?></option>
                                    <?php }?>
                                </select>
                            </div>
                            </div>
                            <!-- End-Select Perfil-->
                             <!-- select -->
                             <div class="form-group">
                                 <label>Perfil</label>
                                     <div class="input-field col12 s12">
                                <select class="browser-default" name="perfil">
                                    <option value="" disabled selected>Perfil</option>
                                    <?php foreach ($perfil as $key => $value){?>
                                        <option value="<?php echo $value['perfil'];?>"><?php echo $value['perfil'];?></option>
                                    <?php }?>
                                </select>
                            </div>
                            </div>
                            <!-- End-Select Perfil-->
                            <div class="form-group ">
                            <div class="input-field col12 s12">
                                <label for="username" class="text-white">Nome:</label><br>
                                <input type="text" name="nome" id="nome" class="form-control ">
                                <input type="hidden" name="metodo" id="metodo" class="form-control"value="inserir">
                                <input type="hidden" name="tabela" id="tabela" class="form-control"value="user">
                            </div>
                            </div>
                            <div class="form-group">
                            <div class="input-field col12 s12">
                                <label for="useremail" class="text-white">E-mail:</label><br>
                                <input type="email" name="email" id="useremail" class="form-control" >
                            </div>
                            </div>
                            <div class="form-group">
                                <div class="input-field col12 s12">
                                    <label for="password" class="text-white">Senha:</label><br>
                                    <input type="text" name="senha" id="password" class="form-control">
                                </div>
                            </div>
                           
                            <div class="form-group">
                               
                                <input type="submit" name="submit" class="btn btn-primary blue darken-4 btn-md" value="Enviar">
                            </div>
                            <div id="register-link" class="text-right">
                               
                            </div>
                        </form>
                    </div>
                </div>

  
                                    <div class="col s12 m4">
                                <?php foreach ($users as $key => $value):?> 
                                        <h2 class="header"></h2>
                                        <div class="card horizontal m<?php echo $value['id']?>">
                                        <div class="card-image">
                                            <!-- <img src="https://lorempixel.com/100/190/nature/7"> -->
                                        </div>
                                        <div class="card-stacked ">
                                            <div class="card-content">
                                            <p>ID = <?php echo $value['id']?></p>
                                            <p><?php echo $value['nome']?></p>
                                            <p><?php echo $value['email']?></p>
                                            </div>
                                            <div class="card-action">
                                            <a onclick="UdateUser(event)"  class="btn-floating btn-smal waves-effect waves-light blue"><i id="<?php echo $value['id']?>" class="material-icons">edit</i></a>
                                            <a onclick="delUser(event)"  class="btn-floating btn-smal waves-effect waves-light red"><i id="<?php echo $value['id']?>" class="material-icons">delete</i></a>
                                            <!-- <a href="#"><?php echo $value['nome']?></a> -->
                                            </div>
                                        </div>
                                        </div>
                                <?php endforeach ?>
                                    </div>
             

            </div>
        
    </div>









<script> var session = "<?php echo $_SESSION['status_senha'];?>" </script>