jQuery(document).ready(function () {

    function limpa_formulário_cep() {
        // Limpa valores do formulário de cep.
        jQuery(".fieldCep").val("");
    }

    //Quando o campo cep perde o foco.
    jQuery(".btn.cep").click(function () {
        
        //Nova variável "cep" somente com dígitos.
        var cep = jQuery('.fieldCep').val().replace(/\D/g, '');
       
        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if (validacep.test(cep)) {
                
                //Consulta o webservice viacep.com.br/
                jQuery.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function (dados) {


                    if (!("erro" in dados)) {

                        //Atualiza os campos com os valores da consulta.
                        jQuery("#cepInformado").html('<p> Logradouro: ' + dados.logradouro + '</p><p>Bairro: ' + dados.bairro + '</p><p>Cidade: ' + dados.localidade + '</p><p>Estado: ' + dados.uf + '</p>');

                    } //end if.
                    else {
                        //CEP pesquisado não foi encontrado.
                        //limpa_formulário_cep();
                        alert("CEP não encontrado.");
                    }
                });
            } //end if.
            else {
                //cep é inválido.
                //limpa_formulário_cep();
                alert("Formato de CEP inválido.");
                limpa_formulário_cep();
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    });

});