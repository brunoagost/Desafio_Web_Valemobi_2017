<?php
include 'cabecalho.php';
require_once'classes/DaoMercadoria.php';
  ?>
  <div class="well">
    <h1 class="text-center">Plataforma de Operações</h1>
  </div>
</header>
<?php
if (isset($_GET['msg'])) {
    echo '<div class="alert alert-success alert-dismissible text-center" role="alert">
          <button type="button" class="close" data-dismiss="alert"
          aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <strong>Operação Realizada com Sucesso!!</strong> </div>';
  }else if (isset($_GET['erro'])) {
    echo '<div class="alert alert-danger alert-dismissible text-center" role="alert">
          <button type="button" class="close" data-dismiss="alert"
          aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <strong>Operação Não Realizada!!</strong> </div>';
  }else if(isset($_GET['id'])){
    echo '<div class="alert alert-danger alert-dismissible text-center" role="alert">
          <button type="button" class="close" data-dismiss="alert"
          aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <strong>O Código informado já Existe!!</strong> </div>';
  }
 ?>
<div class="container">
  <legend class="text-center">Lista de Operações</legend>
     <table class="table table-striped table-bordered text-center">
         <thead class="toptab">
               <tr>
                   <td>Código da Mercadoria:</td>
                   <td>Tipo da Mercadoria:</td>
                   <td>Nome da Mercadoria:</td>
                   <td>Quantidade</td>
                   <td>Preço:</td>
                   <td>Tipo de Negocio:</td>
                   <td>Alteração:</td>
                   <td>Remoção:</td>
               </tr>
          </thead>
 <?php
$mercadoria = new DaoMercadoria();
$mercadorias = $mercadoria->findAllMerc();
foreach ($mercadorias  as $value): ?>
            <tbody>
                  <tr>
                      <td><?= $value->codigo_id?></td>
                      <td><?= $value->tipo?></td>
                      <td><?= $value->nome?></td>
                      <td><?= $value->quantidade ?></td>
                      <td><?= $value->preco ?></td>
                      <td><?= $value->tiponegocio_tb_nome?></td>
                      <td>
                          <form action="alterarOperacao.php" method="post">
                            <input type="hidden" name="codigo_id" value="<?=$value->codigo_id?>">
                            <button type="submit" class="btn altera"  name="alterar">Alterar</button>
                          </form>
                      </td>
                      <td>
                          <form action="removeMercadoria.php" method="post">
                            <input type="hidden" name="codigo_id" value="<?= $value->codigo_id ?>">
                            <button type="submit" class="btn remove" name="excluir" >Remover</button>
                          </form>
                      </td>
                  </tr>
              </tbody>
<?php endforeach;
?>
        </table>
</div>

<?php
include 'rodape.php';
 ?>
