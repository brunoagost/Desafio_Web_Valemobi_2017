<?php
 require_once 'conexao/ConBd.php';

class ModelMercadoria extends ConBd{

   protected $codigo_id;
   protected $tipo;
   protected $nome;
   protected $quantidade;
   protected $preco;
   protected $tiponegocio_id;

   public function getCodigo(){
     return $this->codigo_id;
   }
   public function setCodigo($codigo_id){
      $this->codigo_id = $codigo_id;
   }
   public function getTipo(){
     return $this->tipo;
   }
   public function setTipo($tipo){
     $this->tipo = $tipo;
   }
   public function getNome(){
     return $this->nome;
   }
   public function setNome($nome){
     $this->nome = $nome;
   }
   public function getQuantidade(){
     return $this->quantidade;
   }
   public function setQuantidade($quantidade){
     $this->quantidade = $quantidade;
   }
   public function getPreco(){
     return $this->preco;
   }
   public function setPreco($preco){
     $this->preco =$preco;
   }
   public function getTipoNegocio_id(){
     return $this->tiponegocio_id;
   }
   public function setTiponegocio_id($tiponegocio_id){
     $this->tiponegocio_id = $tiponegocio_id;
   }
 }
