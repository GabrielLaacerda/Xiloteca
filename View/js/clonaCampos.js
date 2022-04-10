function copiarModelo(){
    var html = $(".modelo").clone();
    html.removeClass("modelo");
    html.removeClass("d-none");
    $(".Nomes").append(html);
}

function copiarModeloRaio(){
    var html = $(".modeloRaio").clone();
    html.removeClass("modeloRaio");
    html.removeClass("d-none");
    $(".NomesRaios").append(html);
}

function copiarModeloCaracteristica(){
    var html = $(".modeloCaracteristica").clone();
    html.removeClass("modeloCaracteristica");
    html.removeClass("d-none");
    $(".Caracteristica").append(html);
}