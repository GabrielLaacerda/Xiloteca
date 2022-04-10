$(document).ready(function () {
    $("#BotaoImagensAmostra").click(function (event) {
        event.preventDefault();

        $MAR = $('input[name="mar"]').val().split('\\').pop();
        $MATan = $('input[name="matan"]').val().split('\\').pop();
        $MATrans = $('input[name="matrans"]').val().split('\\').pop();
        $FA = $('input[name="fotoAmostra"]').val().split('\\').pop();
        $fkA = $('input[name="idA"]').val();

        if ($fkA == "") {
            var $valido = $('<div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin-top:2%">Erro ao cadastrar Imagem<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');

            if ($(".alert").length) {
                $(".alert").remove();

                $("#fotosA").append($valido);

            } else {
                $("#fotosA").append($valido);
            }

            $('input').val("");

        } else {

            event.preventDefault();
            $.ajax({
                method: "POST",
                url: "../controller/cadastraImagensAmostraController.php",
                data: {
                    mar: $MAR,
                    matan: $MATan,
                    matrans: $MATrans,
                    fotoA:$FA,
                    fk_amostra: $fkA
                },
                success: function (retorno) {

                    var $valido = $('<div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-top:2%">Imagens cadastradas com sucesso<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');

                    if ($(".alert").length) {
                        $(".alert").remove();

                        $("#fotosA").append($valido);

                    } else {
                        $("#fotosA").append($valido);
                    }
                    $('input').val("");
                },
                error: function (retorno) {

                }
            });
        }
    });

});