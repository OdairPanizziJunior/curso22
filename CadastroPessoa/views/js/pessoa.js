$( document ).ready(function() {

    var baseUrl ="http://172.27.208.180/curso22/CadastroPessoa/controllers/PessoaController.php";


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
            $("#idRG").val(dadosPessoa.rg);
            $("#idPIS").val(dadosPessoa.pis);
            $("#idProf").val(dadosPessoa.prof);

            if (dadosPessoa.cpf_cnpj == 1){
                    $("#idCPF").prop('checked', true);
                    $("#idCNPJ").prop('checked', false);
                }else{
                    $("#idCPF").prop('checked', false);
                    $("#idCNPJ").prop('checked', true);
                };
            
            if (dadosPessoa.sing_rel_comp == 1){
                    $("#idSing").prop('checked', true);
                    $("#idRel").prop('checked', false);
                    $("#idComp").prop('checked', false);
                }else if (dadosPessoa.sing_rel_comp == 2){
                    $("#idSing").prop('checked', false);
                    $("#idRel").prop('checked', true);
                    $("#idComp").prop('checked', false);
                }else if (dadosPessoa.sing_rel_comp == 3){
                    $("#idSing").prop('checked', false);
                    $("#idRel").prop('checked', false);
                    $("#idComp").prop('checked', true);
                };
            
            if (dadosPessoa.male_fema_comp == 1){
                    $("#idMale").prop('checked', true);
                    $("#idFemale").prop('checked', false);
                    $("#idCompany").prop('checked', false);
                }else if (dadosPessoa.male_fema_comp == 2){
                    $("#idMale").prop('checked', false);
                    $("#idFemale").prop('checked', true);
                    $("#idCompany").prop('checked', false);
                }else if (dadosPessoa.male_fema_comp == 3){
                    $("#idMale").prop('checked', false);
                    $("#idFemale").prop('checked', false);
                    $("#idCompany").prop('checked', true);
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
