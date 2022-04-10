$('.hidd').hide();
$('.t').hide();

$(document).ready(function () {
  $('.hidd').hide();

  $("#opTb").click(function () {
    $('#opcoesSeparadas').show();
    $('#TabelasSeparadas').show();
    $('.t').hide();
    $('#BuscaPrincipal').show();
    var html = $("#parenquimaCom");
    html.addClass("d-none");
    var html2 = $("#vasosCom");
    html2.addClass("d-none");
    var html3 = $("#raiosCom");
    html3.addClass("d-none");
  });

  $("#botaoLamina").click(function () {
    $('#opcoesSeparadas').show();
    $('#BuscaPrincipal').hide();
    $('.t').hide();
    $('#TabelasSeparadas').hide();
    $('#TabLaminas').show();
    var html = $("#parenquimaCom");
    html.addClass("d-none");
    var html2 = $("#vasosCom");
    html2.addClass("d-none");
    var html3 = $("#raiosCom");
    html3.addClass("d-none");
  });

  $("#botaoEspecie").click(function () {
    $('#opcoesSeparadas').show();
    $('#BuscaPrincipal').hide();
    $('.t').hide();
    $('#TabelasSeparadas').hide();
    $('#TabEspecies').show();
    var html = $("#parenquimaCom");
    html.addClass("d-none");
    var html2 = $("#vasosCom");
    html2.addClass("d-none");
    var html3 = $("#raiosCom");
    html3.addClass("d-none");
  });

  $("#botaoAmostra").click(function () {
    $('#opcoesSeparadas').show();
    $('#BuscaPrincipal').hide();
    $('.t').hide();
    $('#TabelasSeparadas').hide();
    $('#TabAmostras').show();
    var html = $("#parenquimaCom");
    html.addClass("d-none");
    var html2 = $("#vasosCom");
    html2.addClass("d-none");
    var html3 = $("#raiosCom");
    html3.addClass("d-none");
  });

  $("#botaoOrganolepticas").click(function () {
    var html = $("#parenquimaCom");
    html.addClass("d-none");
    var html2 = $("#vasosCom");
    html2.addClass("d-none");
    var html3 = $("#raiosCom");
    html3.addClass("d-none");
    $('.t').hide();
    $('#BuscaPrincipal').hide();
    $('#opcoesSeparadas').show();
    $('#TabOrganolepticas').show();

  });

  $("#botaoParenquimas").click(function () {
    var html = $("#parenquimaCom");
    html.addClass("d-none");
    var html2 = $("#vasosCom");
    html2.addClass("d-none");
    var html3 = $("#raiosCom");
    html3.addClass("d-none");
    $('.t').hide();
    $('#BuscaPrincipal').hide();
    $('#opcoesSeparadas').show();
    $('#TabParenquimas').show();
  });

  $("#botaoCaracEsp").click(function () {
    $('.t').hide();
    $('#BuscaPrincipal').hide();
    $('#opcoesSeparadas').show();
    $('#TabCaracEsp').show();
    var html = $("#parenquimaCom");
    html.addClass("d-none");
    var html2 = $("#vasosCom");
    html2.addClass("d-none");
    var html3 = $("#raiosCom");
    html3.addClass("d-none");
  });

  $("#botaoVasos").click(function () {
    $('.t').hide();
    $('#BuscaPrincipal').hide();
    $('#opcoesSeparadas').show();
    $('#TabVasos').show();
    var html = $("#parenquimaCom");
    html.addClass("d-none");
    var html2 = $("#vasosCom");
    html2.addClass("d-none");
    var html3 = $("#raiosCom");
    html3.addClass("d-none");
  });

  $("#botaoRaios").click(function () {
    $('.t').hide();
    $('#BuscaPrincipal').hide();
    $('#opcoesSeparadas').show();
    $('#TabRaios').show();
    var html = $("#parenquimaCom");
    html.addClass("d-none");
    var html2 = $("#vasosCom");
    html2.addClass("d-none");
    var html3 = $("#raiosCom");
    html3.addClass("d-none");
  });

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

})
function chamaVerParenquima(){
  var html = $("#parenquimaCom");
  var html1 = $("#raiosCom");
  var html2 = $("#vasosCom");
  html1.addClass("d-none");
  html2.addClass("d-none");
  html.removeClass("d-none");
}

function chamaVerRaios(){
  var html = $("#parenquimaCom");
  var html1 = $("#raiosCom");
  var html2 = $("#vasosCom");
  html.addClass("d-none");
  html2.addClass("d-none");
  html1.removeClass("d-none");
}

function chamaVerVasos(){
  var html = $("#parenquimaCom");
  var html1 = $("#raiosCom");
  var html2 = $("#vasosCom");
  html.addClass("d-none");
  html1.addClass("d-none");
  html2.removeClass("d-none");
}