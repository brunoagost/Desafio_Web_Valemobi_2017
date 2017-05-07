<?php
require_once'classes/DaoMercadoria.php';
//Mesma logica do adicionar
$mercadoria = new DaoMercadoria();
if (isset($_POST["confirma"])){
    $codigo_id = $_POST["codigo_id"];
    $resultado = $mercadoria->findCodigo($codigo_id);
          if($resultado == null ){
                $tipo = $_POST["tipo"];
                $nome = $_POST["nome"];
                $quantidade = $_POST["quantidade"];
                $preco = $_POST["preco"];
                $tiponegocio_id = $_POST["tipoNegocio"];
                $mercadoria->setTipo($tipo);
                $mercadoria->setNome($nome);
                $mercadoria->setQuantidade($quantidade);
                $mercadoria->setPreco($preco);
                $mercadoria->setTipoNegocio_id($tiponegocio_id);
                      if($mercadoria->update($codigo_id)){
                        $msg = true;
                        header('location:operacaoes.php.?msg='.$msg);
                        exit();
                      }else{
                        $erro = true;
                        header('location:operacaoes.php.?erro='.$erro);
                        exit();
                     }
            }else{
            $id = true;
            header('location:operacaoes.php.?id='.$id);
            exit();
            };
}else{
$erro = true;
header('location:operacaoes.php.?erro='.$erro);
exit();
};
