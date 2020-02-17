






<div class="container">

        <!-- <h1><?=$nome === 'Vagner Barbosa' ? $nome: 'Não é Ele';?></h1> -->
        <!-- <p><?=$start === '0' ? 'Troque a Senha' : 'A Senha não é nova '?></p> -->
        <pre>
       <!--  <?php print_r($viewData)?>
         -->
        <?php 
               foreach ($viewData as $value):
                       
               ?>                     <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src=".../100px180/" alt="Imagem de capa do card">
                        <div class="card-body">
                        <h5 class="card-title"><?=$value;?></h5>
                        <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                        <a href="#" class="btn btn-primary">Visitar</a>
                        </div>
                        </div>
                        <?php
                                if(!empty($viewData['dadosFora'])){
                                        $i =0;
                                        foreach ($dadosFora['pokemon'][$i] as $key=>$value) {
                                          
                                                $e = 0;
                                                  switch($key)
                                                  {
                                                          
                                                          case 'type':
                                                                echo 'TYPE----->'.$value[$e].'<br>';
                                                          break;
                                                          case 'multipliers':
                                                                echo 'MULTIPLAYERS------>'.$value[$e].'<br>';
                                                          break;
                                                          case 'weaknesses':
                                                                echo 'WEAKNESSES------>'.$value[$e].'<br>';
                                                          break;
                                                          case 'next_evolution':
                                                                echo 'NUM---->'.$value[$e]['num'].'<br>';
                                                                echo 'NUM---->'.$value[$e]['name'].'<br>';
                                                          break;
                                                          default:
                                                          echo $value.'<br>';
                                                          $e++;
                                                  }
                                               
                                                $i++;
                                        }
                                }
                        ?>

              <?php
                endforeach;
                ?>

 


</div>