$(document).ready(function () {
    $("#BotaoImagensLamina").click(function (event) {
        $MR = $('input[name="imagemLMRad"]').val().split('\\').pop();
        $MTan = $('input[name="MTan"]').val().split('\\').pop();
        $MTrans = $('input[name="MTrans"]').val().split('\\').pop();
        $fk = $('input[name="idL"]').val();
        
        var form = $("#FormImagens")[0];
        
        var formData = new FormData(form);
        let dataJSON = Object.fromEntries(formData)
        console.log(dataJSON);
        if ($fk == "") {
            var $valido = $('<div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin-top:2%">Erro ao cadastrar Imagem<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');

            if ($(".alert").length) {
                $(".alert").remove();

                $("#fotosL").append($valido);

            } else {
                $("#fotosL").append($valido);
            }

            $('input').val("");

        } else {
            $.ajax({
                method: "POST",
                url: "../controller/cadastraImagensAmostraController.php",
                data: formData,
                processData: false,
                contentType: false,
                cache: false,
                success: function (retorno) {
                    var $valido = $('<div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-top:2%">Imagens cadastradas com sucesso<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');

                    if ($(".alert").length) {
                        $(".alert").remove();

                        $("#fotosL").append($valido);

                    } else {
                        $("#fotosL").append($valido);
                    }
                    $('input').val("");
                },
                error: function (retorno) {

                }
            });
        }
    });

});