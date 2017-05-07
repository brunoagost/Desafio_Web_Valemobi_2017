<?php
require_once 'classes/DaoMercadoria.php';
$mercadoria = new DaoMercadoria();
if (isset($_POST['excluir'])){
  $codigo_id = $_POST['codigo_id'];
      if($codigo_id !== null){
      $mercadoria->delete($codigo_id);
      $msg = true;
      header('location:operacaoes.php.?msg='.$msg);
      exit();
      }else{
        $erro = true;
        header('location:operacaoes.php.?erro='.$erro);
        exit();
      }
}else {
  $erro = true;
  header('location:operacaoes.php.?erro='.$erro);
  exit();
}
