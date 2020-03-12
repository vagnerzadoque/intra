<div class="container-fluid">

        <div class="row">
            <div class="col s12 m4 l4">
                
                <div class="card">
                    <div class="card-content">
                      <a class="btn-floating btn-small waves-effect waves-light blue" href=""><i class="material-icons">touch_app </i></a>
                      Tecnologia da Informacao
                   </div>
                    <div class="card-tabs">
                      <ul class="tabs tabs-fixed-width">
                        <li class="tab"><a class="active" href="#IDclassificar">Clasificar</a></li>
                        <li class="tab"><a  href="#IDurgente">Urgente</a></li>
                        <li class="tab"><a href="#IDmoderado">Moderado</a></li>
                      </ul>
                  </div>
                    
                    <div class="card-content grey lighten-4">
                        
<!-- ABA Classificar --><div id="IDclassificar">
                          
                <ul id="collapsible" class="collapsible">
                <?php foreach($viewData as $value ):?>
                <?php if($value['urgencia'] === '0'):?>
                    <li>
                        <div class="collapsible-header ">
                              <i class="material-icons">
                              thumb_down
                              </i>
                              <i class="material-icons">
                              add_alarm
                              </i>
                              Solicitante: <?php echo $value['solicitante']?>
                                      
                                      </div>
                                    
                                      
                              <div class="collapsible-body">
                                  <div class="row">

                                      <!-- Botoes -->
                                      <div  class="col m4 center"><a btn_classificar="<?php echo $value['id_ti_chamado'];?>"
btn_classificar="<?php echo $value['id_ti_chamado'];?>"
btn_classificar="<?php echo $value['id_ti_chamado'];?>" class="btn-floating btn-small waves-effect waves-light red" href="#"><i class="material-icons">touch_app </i></a></div>
                                      <div  class="col m4 center"><a btn_classificar="<?php echo $value['id_ti_chamado'];?>"
btn_classificar="<?php echo $value['id_ti_chamado'];?>"
btn_classificar="<?php echo $value['id_ti_chamado'];?>" class="btn-floating btn-small waves-effect waves-light blue" href="#"><i class="material-icons">touch_app </i></a></div>
                                      <div  class="col m4 center"><a btn_classificar="<?php echo $value['id_ti_chamado'];?>"
btn_classificar="<?php echo $value['id_ti_chamado'];?>"
btn_classificar="<?php echo $value['id_ti_chamado'];?>" class="btn-floating btn-small waves-effect waves-light green" href="#"><i class="material-icons">touch_app </i></a></div>
                                      <!-- Botoes -->

                                </div>
                                      <div class="row">

                                              <div class="col s8 m8">
                                                    <div>
                                                       
                                                        Solicitante: <?php echo $value['solicitante'];?><br>
                                                        Unidade: <?php echo $value['unidade'];?> <br>
                                                        Departamento: <?php echo $value['departamento'];?><br>
                                                        Problema: <?php echo $value['problema']; ?>
                                                        //var_dump($viewData);
                                                     
                                                    </div>
                                              </div>
                                          
                                      </div>
                        </div>
                                          
               
                <?php endif?>

                  <?php endforeach ?>

                    </li>
                           
                </ul>
                       
<!-- ABA Classificar --></div>
                         
      <!-- ABA Urgente--><div id="IDurgente">
                      
                       
                      
                          
                          <ul id="collapsible" class="collapsible">
                          <?php foreach($viewData as $value ):?>
                          <?php if($value['urgencia'] === '1'):?>
                              <li>
                                  <div class="collapsible-header ">
                                        <i class="material-icons">
                                        thumb_down
                                        </i>
                                        <i class="material-icons">
                                        add_alarm
                                        </i>
                                        Solicitante: <?php echo $value['solicitante']?>
                                                
                                                </div>
                                              
                                                
                                        <div class="collapsible-body">
                                            <div class="row">
          
                                                <!-- Botoes -->
                                                <div class="col m4 center"><a class="btn-floating btn-small waves-effect waves-light red" href=""><i class="material-icons">touch_app </i></a></div>
                                                <div class="col m4 center"><a class="btn-floating btn-small waves-effect waves-light blue" href=""><i class="material-icons">touch_app </i></a></div>
                                                <div class="col m4 center"><a class="btn-floating btn-small waves-effect waves-light green" href=""><i class="material-icons">touch_app </i></a></div>
                                                <!-- Botoes -->
          
                                          </div>
                                                <div class="row">
          
                                                        <div class="col s8 m8">
                                                              <div>
                                                                 
                                                                  Solicitante: <?php echo $value['solicitante'];?><br>
                                                                  Unidade: <?php echo $value['unidade'];?> <br>
                                                                  Departamento: <?php echo $value['departamento'];?><br>
                                                                  Problema: <?php echo $value['problema']; ?>
                                                                  //var_dump($viewData);
                                                               
                                                              </div>
                                                        </div>
                                                    
                                                </div>
                                  </div>
                                                    
                         
                          <?php endif?>
          
                            <?php endforeach ?>
          
                              </li>
                                     
                          </ul>
                                 
                               
                      
                      
  <!-- ABA Urgente FIM--></div>

                       
  <!-- ABA Moderado Inicio --><div id="IDmoderado">
  
  
                  
                  <ul id="collapsible" class="collapsible">
                          <?php foreach($viewData as $value ):?>
                          <?php if($value['urgencia'] === '2'):?>
                              <li>
                                  <div class="collapsible-header ">
                                        <i class="material-icons">
                                        thumb_down
                                        </i>
                                        <i class="material-icons">
                                        add_alarm
                                        </i>
                                        Solicitante: <?php echo $value['solicitante']?>
                                                
                                                </div>
                                              
                                                
                                        <div class="collapsible-body">
                                            <div class="row">
          
                                                <!-- Botoes -->
                                                <div class="col m4 center"><a class="btn-floating btn-small waves-effect waves-light red" href=""><i class="material-icons">touch_app </i></a></div>
                                                <div class="col m4 center"><a class="btn-floating btn-small waves-effect waves-light blue" href=""><i class="material-icons">touch_app </i></a></div>
                                                <div class="col m4 center"><a class="btn-floating btn-small waves-effect waves-light green" href=""><i class="material-icons">touch_app </i></a></div>
                                                <!-- Botoes -->
          
                                          </div>
                                                <div class="row">
          
                                                        <div class="col s8 m8">
                                                              <div>
                                                                 
                                                                  Solicitante: <?php echo $value['solicitante'];?><br>
                                                                  Unidade: <?php echo $value['unidade'];?> <br>
                                                                  Departamento: <?php echo $value['departamento'];?><br>
                                                                  Problema: <?php echo $value['problema']; ?>
                                                                  //var_dump($viewData);
                                                               
                                                              </div>
                                                        </div>
                                                    
                                                </div>
                                  </div>
                                                    
                         
                          <?php endif?>
          
                            <?php endforeach ?>
          
                              </li>
                                     
                          </ul>
  
  
  
  
  <!-- ABA Moderado Fim --></div>



                    </div>
                  </div>


            </div>
            
           <!-- Coluna Fazendo --> <div class="col s12 m4 l4">

              <ul id="collapsible" class="collapsible">
                <?php foreach($viewData as $value ):?>
                    <?php if($value['urgencia'] === '3'):?>

                              <li>
                                  <div class="collapsible-header"><i class="material-icons">filter_drama</i>First</div>
                                  <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                              </li>

                      <?php endif?>
                  <?php endforeach ?>
                  
              </ul>



            <!-- Coluna Fazendo Fim--> </div>



<!-- Coluna Feito -->  <div class="col s12 m4 l4">

                      <ul id="collapsible" class="collapsible">

                      <?php foreach($viewData as $value ):?>
                          <?php if($value['urgencia'] === '4'):?>
                          <li>
                            <div class="collapsible-header"><i class="material-icons">filter_drama</i>First</div>
                            <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                          </li>
                          <?php endif?>
                           <?php endforeach ?>
                        </ul>
<!-- Coluna Feito Fim--> </div>

            
        </div>
</div>

<script> var session = "<?php echo $_SESSION['status_senha'];?>" </script>