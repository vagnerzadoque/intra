<?php
namespace Models;


use \PDO;
use \Core\Model;


class Tichamados extends Model {

	
public function TodosChamados(){
	$sql = "SELECT * FROM ti_chamados";
	$sql = $this->db->query($sql);
	$dados = $sql->fetchAll(PDO::FETCH_ASSOC);
	return $dados;
}


public function ModelClassificar($tab, $id, $clas){

	$sql = "UPDATE $tab SET urgencia = :urgencia WHERE id_ti_chamado = :id ";
	$sql = $this->db->prepare($sql);
	$sql->bindValue(':urgencia', $clas['urgencia']);
	$sql->bindValue(':id', $id['id']);
	$sql->execute();	

	


}

}