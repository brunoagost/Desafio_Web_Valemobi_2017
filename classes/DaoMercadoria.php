<?php

/**
 *
 *
 * @author Wellington Raul
*/

require_once 'ModelMercadoria.php';

class DaoMercadoria extends ModelMercadoria {

    protected $tabela = 'mercadoria_tb';
    public function findCodigo($codigo_id) {
      try {
        $sql = "SELECT * FROM $this->tabela WHERE codigo_id = :codigo_id";
        $stm = ConBd::prepare($sql);
        $stm->bindParam(':codigo_id', $codigo_id, PDO::PARAM_INT);
        $stm->execute();
        $rows = $stm->fetchAll();
        return $total = count($rows);
      } catch (PDOException $e) {
            echo $e->getMessage();
      }
    }
    public function findUnit($codigo_id) {
        try {
        $sql = "SELECT * FROM $this->tabela WHERE codigo_id = :codigo_id";
        $stm = ConBd::prepare($sql);
        $stm->bindParam(':codigo_id', $codigo_id, PDO::PARAM_INT);
        $stm->execute();
        return $stm->fetchAll();
      } catch (PDOException $e) {
            echo $e->getMessage();
      }
    }
    public function findAllMerc() {
        try {
        $sql = "SELECT m.*, t.nome as tiponegocio_tb_nome FROM $this->tabela as m join tiponegocio_tb as t on t.tiponegocio_id=m.tiponegocio_id ORDER BY m.codigo_id ASC";
        $stm = ConBd::prepare($sql);
        $stm->execute();
        return $stm->fetchAll();
      } catch (PDOException $e) {
            echo $e->getMessage();
      }
    }
    public function findAll() {
        try {
        $sql = "SELECT * FROM $this->tabela";
        $stm = ConBd::prepare($sql);
        $stm->execute();
        return $stm->fetchAll();
      } catch (PDOException $e) {
            echo $e->getMessage();
      }
    }
    public function insert() {
        try {
        $sql = "INSERT INTO $this->tabela (codigo_id, tipo, nome, quantidade, preco, tiponegocio_id) VALUES (:codigo_id, :tipo, :nome, :quantidade, :preco, :tiponegocio_id)";
        $stm = ConBd::prepare($sql);
        $stm->bindParam(':codigo_id', $this->codigo_id);
        $stm->bindParam(':tipo', $this->tipo);
        $stm->bindParam(':nome', $this->nome);
        $stm->bindParam(':quantidade', $this->quantidade);
        $stm->bindParam(':preco', $this->preco);
        $stm->bindParam(':tiponegocio_id', $this->tiponegocio_id, PDO::PARAM_INT);
        return $stm->execute();
      } catch (PDOException $e) {
            echo $e->getMessage();
      }
    }
    public function update($codigo_id) {
        try {
        $sql = "UPDATE $this->tabela SET tipo = :tipo, nome = :nome, quantidade = :quantidade, preco = :preco, tiponegocio_id = :tiponegocio_id WHERE codigo_id = :codigo_id";
        $stm = ConBd::prepare($sql);
        $stm->bindParam(':codigo_id', $codigo_id, PDO::PARAM_INT);
        $stm->bindParam(':tipo', $this->tipo);
        $stm->bindParam(':nome', $this->nome);
        $stm->bindParam(':quantidade', $this->quantidade);
        $stm->bindParam(':preco', $this->preco);
        $stm->bindParam(':tiponegocio_id', $this->tiponegocio_id, PDO::PARAM_INT);
        return $stm->execute();
      } catch (PDOException $e) {
            echo $e->getMessage();
      }
    }
    public function delete($codigo_id) {
        try {
        $sql = "DELETE FROM $this->tabela WHERE codigo_id = :codigo_id";
        $stm = ConBd::prepare($sql);
        $stm->bindParam(':codigo_id', $codigo, PDO::PARAM_INT);
        return $stm->execute();
      } catch (PDOException $e) {
            echo $e->getMessage();
      }
    }

}
