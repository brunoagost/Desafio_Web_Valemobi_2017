
//Mascaras com jquery
$(document).ready(function(){
   $('#codigo_id').mask('000');
});
$(document).ready(function(){
   $('#quantidade').mask('000.000 ');
});
$(document).ready(function(){
   $('#preco').mask('000.000,00 ');
});
//Validação simples com JS puro
function validacao(){
  var $formulario = document.forms['formMercadoria'];
  var $codigo_id = $formulario.codigo_id.value;
  var $tipo = $formulario.tipo.value;
  var $nome = $formulario.nome.value;
  var $quantidade = $formulario.quantidade.value;
  var $preco = $formulario.preco.value;
  var $tipoNegocio = $formulario.tipoNegocio.value;
  var $erro = false;

  var $caixa_codigo = document.querySelector('.msg-codigo_id');
  if($codigo_id.length == " "){
    $caixa_codigo.innerHTML = 'Favor preencher o campo Código'
    $caixa_codigo.style.display = 'block';
    $erro = true;
  }else{
    $caixa_codigo.style.display = 'none';
  }
  var $caixa_tipo = document.querySelector('.msg-tipo');
  if($tipo.length == " "){
    $caixa_tipo.innerHTML = 'Favor preencher o campo Tipo da Mercadoria'
    $caixa_tipo.style.display = 'block';
    $erro = true;
  }else{
    $caixa_tipo.style.display = 'none';
  }
  var $caixa_nome = document.querySelector('.msg-nome');
  if($nome.length == " "){
    $caixa_nome.innerHTML = 'Favor preencher o campo Nome da Mercadoria'
    $caixa_nome.style.display = 'block';
    $erro = true;
  }else{
    $caixa_nome.style.display = 'none';
  }
  var $caixa_quantidade = document.querySelector('.msg-quantidade');
  if($quantidade.length == " "){
    $caixa_quantidade.innerHTML = 'Favor preencher o campo Quantidade'
    $caixa_quantidade.style.display = 'block';
    $erro = true;
  }else{
    $caixa_quantidade.style.display = 'none';
  }
  var $caixa_preco = document.querySelector('.msg-preco');
  if($preco.length == " "){
    $caixa_preco.innerHTML = 'Favor preencher o campo Preço'
    $caixa_preco.style.display = 'block';
    $erro = true;
  }else{
    $caixa_preco.style.display = 'none';
  }
  var $caixa_tipoNegocio = document.querySelector('.msg-tipoNegocio');
  if($tipoNegocio.length == " "){
    $caixa_tipoNegocio.innerHTML = 'Favor Selecionar o Opção Tipo de Negocio'
    $caixa_tipoNegocio.style.display = 'block';
    $erro = true;
  }else{
    $caixa_tipoNegocio.style.display = 'none';
  }
  if($erro){
  return false;
  }else{
  return true;
}
}
