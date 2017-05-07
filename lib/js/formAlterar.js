//Validação simples de formulário  com jquery validate
$().ready(function(){
  $("#formAlterar").validate({
    errorElement: 'span',
    rules:{
      codigo_id: "required",
      tipo: "required",
      nome: "required",
      quantidade:{
        required: true,
        number: true
      },
      preco: {
        required: true,
        number: true
      }
    },
    messages:{
      codigo_id: "Favor preencher este campo",
      tipo: "Favor preencher este campo",
      nome: "Favor preencher este campo",
      quantidade:{
        required: "Favor preencher este campo",
        number: "Por favor, Informe apenas Numeros"
      },
      preco: {
        required : "Favor preencher este campo",
        number: "Por favor, Informe apenas Numeros"
      }
    }
  })
});
