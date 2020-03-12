<?php



namespace Models;


use \PDO;
use \Core\Model;


class Crud extends Model {



public function inserir($dados, $tab){
        $table = $tab;
        $dados = $dados;
       /*  var_dump($dados); */
        $colunas ='';
        $valores ='';
        $dd = count($dados);
        $colunas .='(';
        
        /* for($i = 0; $i<$dd;$i++){ */
            $valores .='(';
            
            foreach ($dados as  $value) {
                
                $valores .= "'".$value."'" ;
                $valores .= ', ';
            }
            $valores = substr_replace($valores, '', -2);
            
            $valores .=')';
            $valores .= ',';
        /* } */
        
        
        
        $val = substr_replace($valores, '', -2);
        
        
        
        $val .= ')';
        /*  echo $val;
        echo '<hr />'; */
        
        foreach ($dados as $key => $value) {
            
            $colunas .='`'.$key.'`';
            $colunas .= ',';
            
            $valores .= $value;
            
            
        }
        
        $colunas = substr_replace($colunas, '', -1);
        $colunas .=')';
        
        /* echo $colunas; */
        
        
        
        
       
        
        $sql = "INSERT INTO `$table` $colunas VALUES $val";
        
        
        $sql = $this->db->query($sql);
        
        return true;
        
    } /* fim do inserir */
    
    
public function Update($id, $tab, $dados){

    $table = $tab;
    $dados = $dados;
   /*  var_dump($dados); */
    $colunas ='';
    $valores ='';
    $dd = count($dados);
    $colunas .='(';


    for($i = 0; $i<$dd;$i++){
        $valores .='(';

        foreach ($dados[$i] as  $value) {

            $valores .= "'".$value."'" ;
            $valores .= ', ';
        }
        $valores = substr_replace($valores, '', -2);

        $valores .=')';
        $valores .= ',';
    }



$val = substr_replace($valores, '', -2);



    $val .= ')';
   /*  echo $val;
    echo '<hr />'; */

foreach ($dados[0] as $key => $value) {
    
    $colunas .='`'.$key.'`';
    $colunas .= ',';

    $valores .= $value;
    
    
}

$colunas = substr_replace($colunas, '', -1);
$colunas .=')';

/* echo $colunas; */




       
    $sql = "UPDATE `$table` SET  $colunas VALUES $val WHERE id = $id";
    
  
    $sql = $this->db->query($sql);

    return $colunas;


}

public function Deletar($id, $tab){
   
    $sql = "DELETE FROM `$tab` WHERE `$tab`.`id` = $id";
    $sql = $this->db->query($sql);
    return true;

}




}