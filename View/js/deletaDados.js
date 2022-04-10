$(document).ready(function () {
$('#table_id1').DataTable({
    "language": {
        "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"
    }
});
$('#table_id2').DataTable({
    "language": {
        "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"
    }
});
$('#table_id3').DataTable({
    "language": {
        "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"
    }
});
$('#table_id4').DataTable({
    "language": {
        "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"
    }
});
$('#table_id5').DataTable({
    "language": {
        "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"
    }
});
$('#table_id6').DataTable({
    "language": {
        "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"
    }
});
$('#table_id7').DataTable({
    "language": {
        "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"
    }
});
$('#table_id8').DataTable({
    "language": {
        "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"
    }
});
$('#table_id9').DataTable({
    "language": {
        "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"
    }
});
$('#table_id10').DataTable({
    "language": {
        "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"
    }
});
$('#table_id11').DataTable({
    "language": {
        "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"
    }
});
$('#table_id12').DataTable({
    "language": {
        "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"
    }
});
$('#table_id13').DataTable({
    "language": {
        "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"
    }
});
$('#table_id14').DataTable({
    "language": {
        "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"
    }
});
$('#table_id15').DataTable({
    "language": {
        "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"
    }
});
$('#table_id16').DataTable({
    "language": {
        "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"
    }
});
$('#table_id17').DataTable({
    "language": {
        "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"
    }
});
$('#table_id18').DataTable({
    "language": {
        "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"
    }
});
$('#table_id1').DataTable();
$('#table_id2').DataTable();
$('#table_id3').DataTable();
$('#table_id4').DataTable();
$('#table_id5').DataTable();
$('#table_id6').DataTable();
$('#table_id7').DataTable();
$('#table_id8').DataTable();
$('#table_id9').DataTable();
$('#table_id10').DataTable();
$('#table_id11').DataTable();
$('#table_id12').DataTable();
$('#table_id13').DataTable();
$('#table_id14').DataTable();
$('#table_id15').DataTable();
$('#table_id16').DataTable();
$('#table_id17').DataTable();
$('#table_id18').DataTable();
});

function chamaDeleteAmostra(id,botao){
    $.ajax({
        url: '../controller/deletaAmostraController.php',
        method: 'POST',
        data: {id: id},
        dataType: 'json'
    }).done(function(result){
        $(botao).parent().parent().fadeOut(1000).remove();
        console.log(result);
        $('#prin').html(result);
        $('#prin').fadeIn(1000).delay(3000).fadeOut(1000);
    });
}
function chamaDeleteLamina(id,botao){
    $.ajax({
        url: '../controller/deletaLaminaController.php',
        method: 'POST',
        data: {id: id},
        dataType: 'json'
    }).done(function(result){
        $(botao).parent().parent().fadeOut(1000).remove();
        console.log(result);
        $('#prin1').html(result);
        $('#prin1').fadeIn(1000).delay(3000).fadeOut(1000);
    });
}
function chamaDeleteCEspeciais(id,botao){
    $.ajax({
        url: '../controller/deletaCEspeciaisController.php',
        method: 'POST',
        data: {id: id},
        dataType: 'json'
    }).done(function(result){
        $(botao).parent().parent().fadeOut(1000).remove();
        console.log(result);
        $('#prin2').html(result);
        $('#prin2').fadeIn(1000).delay(3000).fadeOut(1000);
    });
}
function chamaDeleteEspecie(id,botao){
    $.ajax({
        url: '../controller/deletaEspecieController.php',
        method: 'POST',
        data: {id: id},
        dataType: 'json'
    }).done(function(result){
        $(botao).parent().parent().fadeOut(1000).remove();
        console.log(result);
        $('#prin3').html(result);
        $('#prin3').fadeIn(1000).delay(3000).fadeOut(1000);
    });
}
function chamaDeleteRaio(id,botao){
    $.ajax({
        url: '../controller/deletaRaioController.php',
        method: 'POST',
        data: {id: id},
        dataType: 'json'
    }).done(function(result){
        $(botao).parent().parent().fadeOut(1000).remove();
        console.log(result);
        $('#prin4').html(result);
        $('#prin4').fadeIn(1000).delay(3000).fadeOut(1000);
    });
}
function chamaDeleteParenquima(id,botao){
    $.ajax({
        url: '../controller/deletaParenquimaController.php',
        method: 'POST',
        data: {id: id},
        dataType: 'json'
    }).done(function(result){
        $(botao).parent().parent().fadeOut(1000).remove();
        console.log(result);
        $('#prin6').html(result);
        $('#prin6').fadeIn(1000).delay(3000).fadeOut(1000);
    });
}
function chamaDeleteVaso(id,botao){
    $.ajax({
        url: '../controller/deletaVasoController.php',
        method: 'POST',
        data: {id: id},
        dataType: 'json'
    }).done(function(result){
        $(botao).parent().parent().fadeOut(1000).remove();
        console.log(result);
        $('#prin7').html(result);
        $('#prin7').fadeIn(1000).delay(3000).fadeOut(1000);
    });
}
function chamaDeleteOrganolepticas(id,botao){
    $.ajax({
        url: '../controller/deletaOrganolepticaController.php',
        method: 'POST',
        data: {id: id},
        dataType: 'json'
    }).done(function(result){
        $(botao).parent().parent().fadeOut(1000).remove();
        console.log(result);
        $('#prin5').html(result);
        $('#prin5').fadeIn(1000).delay(3000).fadeOut(1000);
    });
}
function chamaDeleteCaracEsp(id,botao){
    $.ajax({
        url: '../controller/deletaCaracEspController.php',
        method: 'POST',
        data: {id: id},
        dataType: 'json'
    }).done(function(result){
        $(botao).parent().parent().fadeOut(1000).remove();
        console.log(result);
        $('#prin8').html(result);
        $('#prin8').fadeIn(1000).delay(3000).fadeOut(1000);
    });
}
// -------------------------------------------------------------------------------------------------------------
function escolheLamina(){
    var html = $("#tabelaAmostra");
    var html1 = $("#tabelaLamina");
    var html2 = $("#tabelaCaracEspeciais");
    var html3 = $("#tabelaEspecies");
    var html4 = $("#tabelaRaios");
    var html5 = $("#tabelaOrganolepticas");
    var html6 = $("#tabelaParenquimas");
    var html7 = $("#tabelaVasos");
    var html8 = $("#tabelaCaraEsp");

    html8.addClass("d-none");
    html7.addClass("d-none");
    html6.addClass("d-none");
    html5.addClass("d-none");
    html4.addClass("d-none");
    html3.addClass("d-none");
    html2.addClass("d-none");
    html.addClass("d-none");
    html1.removeClass("d-none");
}
function escolheAmostra(){
    var html = $("#tabelaAmostra");
    var html1 = $("#tabelaLamina");
    var html2 = $("#tabelaCaracEspeciais");
    var html3 = $("#tabelaEspecies");
    var html4 = $("#tabelaRaios");
    var html5 = $("#tabelaOrganolepticas");
    var html6 = $("#tabelaParenquimas");
    var html7 = $("#tabelaVasos");
    var html8 = $("#tabelaCaraEsp");

    html8.addClass("d-none");
    html7.addClass("d-none");
    html6.addClass("d-none");
    html5.addClass("d-none");
    html4.addClass("d-none");
    html3.addClass("d-none");
    html2.addClass("d-none");
    html1.addClass("d-none");
    html.removeClass("d-none");
}
function escolheCEspeciais(){
    var html = $("#tabelaAmostra");
    var html1 = $("#tabelaLamina");
    var html2 = $("#tabelaCaracEspeciais");
    var html3 = $("#tabelaEspecies");
    var html4 = $("#tabelaRaios");
    var html5 = $("#tabelaOrganolepticas");
    var html6 = $("#tabelaParenquimas");
    var html7 = $("#tabelaVasos");
    var html8 = $("#tabelaCaraEsp");

    html8.addClass("d-none");
    html7.addClass("d-none");
    html6.addClass("d-none");
    html5.addClass("d-none");
    html4.addClass("d-none");
    html3.addClass("d-none");
    html.addClass("d-none");
    html1.addClass("d-none");
    html2.removeClass("d-none");
}
function escolheEspecie(){
    var html = $("#tabelaAmostra");
    var html1 = $("#tabelaLamina");
    var html2 = $("#tabelaCaracEspeciais");
    var html3 = $("#tabelaEspecies");
    var html4 = $("#tabelaRaios");
    var html5 = $("#tabelaOrganolepticas");
    var html6 = $("#tabelaParenquimas");
    var html7 = $("#tabelaVasos");
    var html8 = $("#tabelaCaraEsp");

    html8.addClass("d-none");
    html7.addClass("d-none");
    html6.addClass("d-none");
    html5.addClass("d-none");
    html4.addClass("d-none");
    html.addClass("d-none");
    html1.addClass("d-none");
    html2.addClass("d-none");
    html3.removeClass("d-none");
}
function escolheRaio(){
    var html = $("#tabelaAmostra");
    var html1 = $("#tabelaLamina");
    var html2 = $("#tabelaCaracEspeciais");
    var html3 = $("#tabelaEspecies");
    var html4 = $("#tabelaRaios");
    var html5 = $("#tabelaOrganolepticas");
    var html6 = $("#tabelaParenquimas");
    var html7 = $("#tabelaVasos");
    var html8 = $("#tabelaCaraEsp");

    html8.addClass("d-none");
    html7.addClass("d-none");
    html6.addClass("d-none");
    html5.addClass("d-none");
    html3.addClass("d-none");
    html.addClass("d-none");
    html1.addClass("d-none");
    html2.addClass("d-none");
    html4.removeClass("d-none");
}
function escolheOrganoleptica(){
    var html = $("#tabelaAmostra");
    var html1 = $("#tabelaLamina");
    var html2 = $("#tabelaCaracEspeciais");
    var html3 = $("#tabelaEspecies");
    var html4 = $("#tabelaRaios");
    var html5 = $("#tabelaOrganolepticas");
    var html6 = $("#tabelaParenquimas");
    var html7 = $("#tabelaVasos");
    var html8 = $("#tabelaCaraEsp");

    html8.addClass("d-none");
    html7.addClass("d-none");
    html6.addClass("d-none");
    html4.addClass("d-none");
    html3.addClass("d-none");
    html.addClass("d-none");
    html1.addClass("d-none");
    html2.addClass("d-none");
    html5.removeClass("d-none");
}
function escolheParenquima(){
    var html = $("#tabelaAmostra");
    var html1 = $("#tabelaLamina");
    var html2 = $("#tabelaCaracEspeciais");
    var html3 = $("#tabelaEspecies");
    var html4 = $("#tabelaRaios");
    var html5 = $("#tabelaOrganolepticas");
    var html6 = $("#tabelaParenquimas");
    var html7 = $("#tabelaVasos");
    var html8 = $("#tabelaCaraEsp");

    html8.addClass("d-none");
    html7.addClass("d-none");
    html5.addClass("d-none");
    html4.addClass("d-none");
    html3.addClass("d-none");
    html.addClass("d-none");
    html1.addClass("d-none");
    html2.addClass("d-none");
    html6.removeClass("d-none");
}
function escolheVaso(){
    var html = $("#tabelaAmostra");
    var html1 = $("#tabelaLamina");
    var html2 = $("#tabelaCaracEspeciais");
    var html3 = $("#tabelaEspecies");
    var html4 = $("#tabelaRaios");
    var html5 = $("#tabelaOrganolepticas");
    var html6 = $("#tabelaParenquimas");
    var html7 = $("#tabelaVasos");
    var html8 = $("#tabelaCaraEsp");

    html8.addClass("d-none");
    html6.addClass("d-none");
    html5.addClass("d-none");
    html4.addClass("d-none");
    html3.addClass("d-none");
    html.addClass("d-none");
    html1.addClass("d-none");
    html2.addClass("d-none");
    html7.removeClass("d-none");
}
function escolheCaracEsp(){
    var html = $("#tabelaAmostra");
    var html1 = $("#tabelaLamina");
    var html2 = $("#tabelaCaracEspeciais");
    var html3 = $("#tabelaEspecies");
    var html4 = $("#tabelaRaios");
    var html5 = $("#tabelaOrganolepticas");
    var html6 = $("#tabelaParenquimas");
    var html7 = $("#tabelaVasos");
    var html8 = $("#tabelaCaraEsp");

    html8.removeClass("d-none");
    html6.addClass("d-none");
    html5.addClass("d-none");
    html4.addClass("d-none");
    html3.addClass("d-none");
    html.addClass("d-none");
    html1.addClass("d-none");
    html2.addClass("d-none");
    html7.addClass("d-none");
}