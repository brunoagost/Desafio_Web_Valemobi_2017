<?php
require_once'classes/DaoMercadoria.php';
$mercadoria = new DaoMercadoria();
//verifica se o existe array(confirma)
if (isset($_POST["confirma"])){
    $codigo_id = $_POST["codigo_id"];
    $resultado = $mercadoria->findCodigo($codigo_id);
//como deixei o campo codigo para ser preencido pelo cliente e no meu BD ele esta como PK
//O findCodigo retorna a quantidade de linhas do banco, caso possua retorno(linhas) ele não insere.
        if($resultado == null ){
                $tipo = $_POST["tipo"];
                $nome = $_POST["nome"];
                $quantidade = $_POST["quantidade"];
                $preco = $_POST["preco"];
                $tiponegocio_id = $_POST["tipoNegocio"];
                $mercadoria->setCodigo($codigo_id);
                $mercadoria->setTipo($tipo);
                $mercadoria->setNome($nome);
                $mercadoria->setQuantidade($quantidade);
                $mercadoria->setPreco($preco);
                $mercadoria->setTipoNegocio_id($tiponegocio_id);
                    if($mercadoria->insert()){
                      $msg= true;
                     header('location:index.php.?msg='.$msg);
                      exit();
                    }else{
                      $erro= true;
                      header('location:index.php.?erro='.$erro);
                      exit();
                    };
        }else{
          $id= true;
          header('location:index.php.?id='.$id);
          exit();
        };
}else{
  $erro= true;
  header('location:index.php.?erro='.$erro);
  exit();
};
