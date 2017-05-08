<?php
require_once'classes/DaoMercadoria.php';
include 'cabecalho.php';
//Mesma logica do adicionar
$mercadoria = new DaoMercadoria();
if (isset($_POST["confirma"])){
               $codigo_id = $_POST["codigo_id"];
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
                       header('location:index.php?msg');
                       exit();
                      }else{
                        header('location:index.php?erro');
                        exit();
                      };
  }else{
    header('location:index.php?erro');
    exit();
  };

