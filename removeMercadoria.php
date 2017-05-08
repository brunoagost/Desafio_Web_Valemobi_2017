<?php
require_once 'classes/DaoMercadoria.php';
$mercadoria = new DaoMercadoria();
if (isset($_POST['excluir'])){
  $codigo_id = $_POST['codigo_id'];
      if($codigo_id !== null){
      $mercadoria->delete($codigo_id);
      header('location:operacaoes.php?msg');
      exit();
      }else{
        header('location:operacaoes.php?erro');
        exit();
      }
}else {
  header('location:operacaoes.php?erro');
  exit();
}
