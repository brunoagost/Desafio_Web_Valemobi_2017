<?php
require_once 'ModelTipoNegocio.php';

class DaoTipoNegocio extends ModelTipoNegocio{
  protected $tabela = 'tiponegocio_tb';
  public function findAll() {
    try{
      $sql = "SELECT * FROM $this->tabela";
      $stm = ConBd::prepare($sql);
      $stm->execute();
      return $stm->fetchAll();
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
}
