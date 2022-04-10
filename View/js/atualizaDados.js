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
});

function chamaUpdateEspecie(id, familia, genero, nomeCien, nomeVul) {
    var html = $("#contact-form");
    html.removeClass("d-none");
    document.getElementById("idE").value = id;
    document.getElementById("familia").value = familia;
    document.getElementById("genero").value = genero;
    document.getElementById("ncien").value = nomeCien;
    document.getElementById("nvulg").value = nomeVul;
}
function chamaUpdateLamina(id, vnome, familia, genero, especie) {
    var html = $("#contact-form2");
    html.removeClass("d-none");
    document.getElementById("idL").value = id;
    document.getElementById("NomeV").value = vnome;
    document.getElementById("FamiliaL").value = familia;
    document.getElementById("GeneroL").value = genero;
    document.getElementById("EspecieL").value = especie;
}
function chamaUpdateAmostra(numero, gaveta, armario, dataC, formato, origem, bioma) {
    var html = $("#contact-form1");
    html.removeClass("d-none");
    document.getElementById("idA").value = numero;
    document.getElementById("Gaveta").value = gaveta;
    document.getElementById("Armario").value = armario;
    document.getElementById("DataC").value = dataC;
    document.getElementById("Formato").value = formato;
    document.getElementById("Origem").value = origem;
    document.getElementById("Bioma").value = bioma;
}
function chamaUpdateCEspeciais(id, descricao) {
    var html = $("#contact-form3");
    html.removeClass("d-none");
    document.getElementById("idCE").value = id;
    document.getElementById("descricao").value = descricao;
}
function chamaUpdateParenquima(id, tipo) {
    var html = $("#contact-form5");
    html.removeClass("d-none");
    document.getElementById("idP").value = id;
    document.getElementById("Tipo").value = tipo;
}
function chamaUpdateVaso(id, nome) {
    var html = $("#contact-form6");
    html.removeClass("d-none");
    document.getElementById("idV").value = id;
    document.getElementById("nomeV").value = nome;
}
function chamaUpdateRaio(id, tipo) {
    var html = $("#contact-form7");
    html.removeClass("d-none");
    document.getElementById("idR").value = id;
    document.getElementById("tipoR").value = tipo;
}
function chamaUpdateOrganolepticas(id, odor, gosto, brilho, textura, cor) {
    var html = $("#contact-form4");
    html.removeClass("d-none");
    document.getElementById("idO").value = id;
    document.getElementById("Odor").value = odor;
    document.getElementById("Gosto").value = gosto;
    document.getElementById("Brilho").value = brilho;
    document.getElementById("Textura").value = textura;
    document.getElementById("Cor").value = cor;
}
$(function () {
    $('#bntAtualizaEspecie').click(function () {
        var u_id = $("#idE").val();
        var u_familia = $("#familia").val();
        var u_genero = $("#genero").val();
        var u_cientifico = $("#ncien").val();
        var u_vulgar = $("#nvulg").val();
        $.ajax({
            url: '../controller/updadeEspecieController.php',
            method: 'POST',
            data: { id: u_id, familia: u_familia, genero: u_genero, ncien: u_cientifico, nvulg: u_vulgar },
            dataType: 'json'
        }).done(function (result) {
            $('#prin').html(result);
            $('#prin').fadeIn(1000).delay(3000).fadeOut(1000);
        });
    });
});
$(function () {
    $('#bntAtualizaLamina').click(function () {
        var u_id = $("#idL").val();
        var u_vnome = $("#NomeV").val();
        var u_familia = $("#FamiliaL").val();
        var u_genero = $("#GeneroL").val();
        var u_especie = $("#EspecieL").val();
        $.ajax({
            url: '../controller/updadeLaminaController.php',
            method: 'POST',
            data: { id: u_id, familia: u_familia, genero: u_genero, vnome: u_vnome, especie: u_especie },
            dataType: 'json'
        }).done(function (result) {
            $('#prin2').html(result);
            $('#prin2').fadeIn(1000).delay(3000).fadeOut(1000);
        });
    });
});
$(function () {
    $('#bntAtualizaAmostra').click(function () {
        var u_numero = $("#idA").val();
        var u_gaveta = $("#Gaveta").val();
        var u_armario = $("#Armario").val();
        var u_data = $("#DataC").val();
        var u_formato = $("#Formato").val();
        var u_origem = $("#Origem").val();
        var u_bioma = $("#Bioma").val();
        $.ajax({
            url: '../controller/updadeAmostraController.php',
            method: 'POST',
            data: { numero: u_numero, gaveta: u_gaveta, armario: u_armario, dataC: u_data, formato: u_formato, origem: u_origem, bioma: u_bioma },
            dataType: 'json'
        }).done(function (result) {
            $('#prin1').html(result);
            $('#prin1').fadeIn(1000).delay(3000).fadeOut(1000);
        });
    });
});
$(function () {
    $('#bntAtualizaCespeciais').click(function () {
        var u_id = $("#idCE").val();
        var u_descricao = $("#descricao").val();
        $.ajax({
            url: '../controller/updadeCespeciaisController.php',
            method: 'POST',
            data: {id: u_id, descricao: u_descricao},
            dataType: 'json'
        }).done(function (result) {
            $('#prin3').html(result);
            $('#prin3').fadeIn(1000).delay(3000).fadeOut(1000);
        });
    });
});
$(function () {
    $('#bntUpdateParenquima').click(function () {
        var u_id = $("#idP").val();
        var u_tipo = $("#Tipo").val();
        $.ajax({
            url: '../controller/updadeParenquimaController.php',
            method: 'POST',
            data: {id: u_id, tipo: u_tipo},
            dataType: 'json'
        }).done(function (result) {
            $('#prin5').html(result);
            $('#prin5').fadeIn(1000).delay(3000).fadeOut(1000);
        });
    });
});
$(function () {
    $('#bntAtualizaVasos').click(function () {
        var u_id = $("#idV").val();
        var u_nome = $("#nomeV").val();
        $.ajax({
            url: '../controller/updadeVasoController.php',
            method: 'POST',
            data: {id: u_id, nome: u_nome},
            dataType: 'json'
        }).done(function (result) {
            $('#prin6').html(result);
            $('#prin6').fadeIn(1000).delay(3000).fadeOut(1000);
        });
    });
});
$(function () {
    $('#bntAtualizaRaios').click(function () {
        var u_id = $("#idR").val();
        var u_tipo = $("#tipoR").val();
        $.ajax({
            url: '../controller/updadeRaioController.php',
            method: 'POST',
            data: {id: u_id, tipo: u_tipo},
            dataType: 'json'
        }).done(function (result) {
            $('#prin7').html(result);
            $('#prin7').fadeIn(1000).delay(3000).fadeOut(1000);
        });
    });
});
$(function () {
    $('#bntAtualizaOrganolepticas').click(function () {
        var u_id = $("#idO").val();
        var u_odor = $("#Odor").val();
        var u_gosto = $("#Gosto").val();
        var u_brilho = $("#Brilho").val();
        var u_textura = $("#Textura").val();
        var u_cor = $("#Cor").val();
        $.ajax({
            url: '../controller/updadeOrganolepticasController.php',
            method: 'POST',
            data: {id: u_id, odor: u_odor, gosto: u_gosto, brilho: u_brilho, textura: u_textura, cor: u_cor},
            dataType: 'json'
        }).done(function (result) {
            $('#prin4').html(result);
            $('#prin4').fadeIn(1000).delay(3000).fadeOut(1000);
        });
    });
});
// -------------------------------------------------------------------------------------------------------------
function escolheLamina() {
    var html = $("#tabelaAmostra");
    var html1 = $("#tabelaLamina");
    var html2 = $("#tabelaCaracEspeciais");
    var html3 = $("#tabelaEspecies");
    var html4 = $("#tabelaRaios");
    var html5 = $("#tabelaOrganolepticas");
    var html6 = $("#tabelaParenquimas");
    var html7 = $("#tabelaVasos");

    html7.addClass("d-none");
    html6.addClass("d-none");
    html5.addClass("d-none");
    html4.addClass("d-none");
    html3.addClass("d-none");
    html2.addClass("d-none");
    html.addClass("d-none");
    html1.removeClass("d-none");
}
function escolheAmostra() {
    var html = $("#tabelaAmostra");
    var html1 = $("#tabelaLamina");
    var html2 = $("#tabelaCaracEspeciais");
    var html3 = $("#tabelaEspecies");
    var html4 = $("#tabelaRaios");
    var html5 = $("#tabelaOrganolepticas");
    var html6 = $("#tabelaParenquimas");
    var html7 = $("#tabelaVasos");

    html7.addClass("d-none");
    html6.addClass("d-none");
    html5.addClass("d-none");
    html4.addClass("d-none");
    html3.addClass("d-none");
    html2.addClass("d-none");
    html1.addClass("d-none");
    html.removeClass("d-none");
}
function escolheCEspeciais() {
    var html = $("#tabelaAmostra");
    var html1 = $("#tabelaLamina");
    var html2 = $("#tabelaCaracEspeciais");
    var html3 = $("#tabelaEspecies");
    var html4 = $("#tabelaRaios");
    var html5 = $("#tabelaOrganolepticas");
    var html6 = $("#tabelaParenquimas");
    var html7 = $("#tabelaVasos");

    html7.addClass("d-none");
    html6.addClass("d-none");
    html5.addClass("d-none");
    html4.addClass("d-none");
    html3.addClass("d-none");
    html.addClass("d-none");
    html1.addClass("d-none");
    html2.removeClass("d-none");
}
function escolheEspecie() {
    var html = $("#tabelaAmostra");
    var html1 = $("#tabelaLamina");
    var html2 = $("#tabelaCaracEspeciais");
    var html3 = $("#tabelaEspecies");
    var html4 = $("#tabelaRaios");
    var html5 = $("#tabelaOrganolepticas");
    var html6 = $("#tabelaParenquimas");
    var html7 = $("#tabelaVasos");

    html7.addClass("d-none");
    html6.addClass("d-none");
    html5.addClass("d-none");
    html4.addClass("d-none");
    html.addClass("d-none");
    html1.addClass("d-none");
    html2.addClass("d-none");
    html3.removeClass("d-none");
}
function escolheRaio() {
    var html = $("#tabelaAmostra");
    var html1 = $("#tabelaLamina");
    var html2 = $("#tabelaCaracEspeciais");
    var html3 = $("#tabelaEspecies");
    var html4 = $("#tabelaRaios");
    var html5 = $("#tabelaOrganolepticas");
    var html6 = $("#tabelaParenquimas");
    var html7 = $("#tabelaVasos");

    html7.addClass("d-none");
    html6.addClass("d-none");
    html5.addClass("d-none");
    html3.addClass("d-none");
    html.addClass("d-none");
    html1.addClass("d-none");
    html2.addClass("d-none");
    html4.removeClass("d-none");
}
function escolheOrganoleptica() {
    var html = $("#tabelaAmostra");
    var html1 = $("#tabelaLamina");
    var html2 = $("#tabelaCaracEspeciais");
    var html3 = $("#tabelaEspecies");
    var html4 = $("#tabelaRaios");
    var html5 = $("#tabelaOrganolepticas");
    var html6 = $("#tabelaParenquimas");
    var html7 = $("#tabelaVasos");

    html7.addClass("d-none");
    html6.addClass("d-none");
    html4.addClass("d-none");
    html3.addClass("d-none");
    html.addClass("d-none");
    html1.addClass("d-none");
    html2.addClass("d-none");
    html5.removeClass("d-none");
}
function escolheParenquima() {
    var html = $("#tabelaAmostra");
    var html1 = $("#tabelaLamina");
    var html2 = $("#tabelaCaracEspeciais");
    var html3 = $("#tabelaEspecies");
    var html4 = $("#tabelaRaios");
    var html5 = $("#tabelaOrganolepticas");
    var html6 = $("#tabelaParenquimas");
    var html7 = $("#tabelaVasos");

    html7.addClass("d-none");
    html5.addClass("d-none");
    html4.addClass("d-none");
    html3.addClass("d-none");
    html.addClass("d-none");
    html1.addClass("d-none");
    html2.addClass("d-none");
    html6.removeClass("d-none");
}
function escolheVaso() {
    var html = $("#tabelaAmostra");
    var html1 = $("#tabelaLamina");
    var html2 = $("#tabelaCaracEspeciais");
    var html3 = $("#tabelaEspecies");
    var html4 = $("#tabelaRaios");
    var html5 = $("#tabelaOrganolepticas");
    var html6 = $("#tabelaParenquimas");
    var html7 = $("#tabelaVasos");

    html6.addClass("d-none");
    html5.addClass("d-none");
    html4.addClass("d-none");
    html3.addClass("d-none");
    html.addClass("d-none");
    html1.addClass("d-none");
    html2.addClass("d-none");
    html7.removeClass("d-none");
}