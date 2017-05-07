
<?php
require_once 'classes/DaoTipoNegocio.php';
require_once 'classes/DaoMercadoria.php';
include 'cabecalho.php';
 ?>
      <div class="well">
        <h1 class="text-center">Plataforma de Negocios</h1>
      </div>
</header>
<?php
if (isset($_GET['msg'])) {
    echo '<div class="alert alert-success alert-dismissible text-center" role="alert">
          <button type="button" class="close" data-dismiss="alert"
          aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <strong>Operação Realizada Com Sucesso!!</strong> </div>';
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
<section>
  <div class="container">
    <legend class="text-center">Mercadoria</legend>
        <form action="adiciona.php" method="post"  id="formMercadoria"  name="formMercadoria" onsubmit="return validacao()">
            <div class="form-group">
              <label for="">Código da mercadoria:</label>
              <input type="number" class="form-control" id="codigo_id" name="codigo_id">
              <span class="msg-erro msg-codigo_id"></span>
            </div>
            <div class="form-group">
                <label for="">Tipo da Mercadoria:</label>
                <input type="text" class="form-control" id="tipo" name="tipo">
                <span class="msg-erro msg-tipo"></span>
            </div>
            <div class="form-group">
                <label for="">Nome da mercadoria:</label>
                <input type="text" class="form-control" id="nome" name="nome">
                <span class="msg-erro msg-nome"></span>
            </div>
            <div class="form-group">
                <label for="">Quantidade:</label>
                <input type="number" class="form-control" id="quantidade" name="quantidade">
                <span class="msg-erro msg-quantidade"></span>
            </div>
            <div class="form-group">
                <label for="">Preço:</label>
                <input type="number" class="form-control" id="preco" name="preco">
                <span class="msg-erro msg-preco"></span>
            </div>
            <div class="form-group">
                  <label for="">Tipo do Negocio:</label>
                    <select  class="form-control" id="tipoNegocio" name="tipoNegocio">
                      <?php
                          $mercadoria = new DaoMercadoria();
                          $negocio = new DaoTipoNegocio();
                          $negocios = $negocio->findALL();
                          foreach ($negocios as $value ) {
                            $Selecionada = $mercadoria->getTipoNegocio == $value->tipoNegocio_id;
                            $selecao = $Selecionada ? "selected='selected'" : "";
                      ?>
                            <option  value="<?=$value->tiponegocio_id?>" <?=$selecao?> ><?=$value->nome?></option>
                      <?php } ?>
                    </select>
                  <span class="msg-erro msg-tipoNegocio"></span>
              </div>
                    <button type="submit" class="btn default" name="confirma">
                        <span class="glyphicon glyphicon-send"></span>Confirmar
                    </button>
        </form>
      </div>
</section>
<?php
include 'rodape.php';
 ?>
