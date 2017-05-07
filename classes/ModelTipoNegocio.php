<?php
 require_once 'conexao/ConBd.php';
class ModelTipoNegocio extends ConBd
{
    protected $tiponegocio_id;
    protected $nome;

    public function getTipoNegocio_id(){
      return $this->tipoNegocio_id;
    }
    public function setTipoNegocio_id($tipoNegocio_id){
      $this->tipoNegocio_id = $tipoNegocio_id;
    }
    public function getNome(){
      return $this->nome;
    }
    public function setNome($nome){
      $this->nome = $nome;
    }

}
