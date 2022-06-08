$( document ).ready(function() {

    var baseUrl ="http://172.27.237.166/curso22/CadastroPessoa/controllers/PessoaController.php";

    $(".btnEditar").on("click", function(){
        var idPessoa = $(this).val();
        baseUrl += "?id=" + idPessoa;

        $.get(baseUrl).done(function(response){
            console.log(JSON.stringify(response));
        });

        console.log("I'm click of Edit button id: " + idPessoa);
    });

    $(".btnExcluir").on("click", function(){
        var idPessoa = $(this).val();
        

        $.post(baseUrl, { id: idPessoa }).done(function(response){
            console.log(JSON.stringify(response))
        });

        console.log("I'm click of Delete button id: " + idPessoa);
    });


});
