$( document ).ready(function() {

    var baseUrl ="http://192.168.252.120/curso22/CadastroPessoa/controllers/PessoaController.php";


    $(".btnEditar").on("click", function(){
        var idPessoa = $(this).val();
        baseUrl += "?id=" + idPessoa;

        $.get(baseUrl).done(function(response){
            var dadosPessoa = response;
            console.log("I'm click of Edit button id: " + dadosPessoa.id);
            console.log("I'm click of Edit button id: " + dadosPessoa.born_fundation);

            $("#idBanco").val(dadosPessoa.id);
            $("#idName").val(dadosPessoa.nome);
            $("#idEmail").val(dadosPessoa.email);
            $("#idPhone").val(dadosPessoa.phone);
            $("#idCep").val(dadosPessoa.cep);
            $("#idSocial").val(dadosPessoa.social);
            $("#idStatus").val(dadosPessoa.status);
            $("#idBorn_Fundation").val(dadosPessoa.born_fundation);
            if (dadosPessoa.cpf_cnpj == 1){
                $("#idCPF").prop('checked', true);
                $("#idCNPJ").prop('checked', false);
            }else{
                $("#idCPF").prop('checked', false);
                $("#idCNPJ").prop('checked', true);
            };
            $(".modal").modal('show');
        });

    });

    $(".btnExcluir").on("click", function(){
        var idPessoa = $(this).val();
        

        $.post(baseUrl, { id: idPessoa }).done(function(response){
            console.log(JSON.stringify(response))
        });

        console.log("I'm click of Delete button id: " + idPessoa);
    });


});
