$('.needs-validation').hide();
$('.d').hide();

$(document).ready(function () {
    $('.needs-validation').hide();

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

    $('#datepicker').datepicker({dateFormat: 'yy-mm-dd'});
    $('#datepicker').datepicker({orientation: 'bottom'});
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

    $("#especie").click(function () {
        $('.t').css({
            "background-image": 'url("")'
        });
        $('.d2').hide();
        $('.d').show();
        $('input').val("");
        $('.needs-validation').hide();
        $("#FormEspecies").show();
    })
    $("#caracE").click(function () {
        $('.t').css({
            "background-image": 'url("")'
        });
        $('.d2').hide();
        $('.d').show();
        $('input').val("");
        $('.needs-validation').hide();
        $("#FormCaracE").show();
    })
    $("#caracteristicas").click(function () {
        $('.t').css({
            "background-image": 'url("")'
        });
        $('.d2').hide();
        $('.d').show();
        $('input').val("");
        $('.needs-validation').hide();
        $("#FormCaracteristicas").show();
    })
    $("#vasos").click(function () {
        $('.t').css({
            "background-image": 'url("")'
        });
        $('.d2').hide();
        $('.d').show();
        $('input').val("");
        $('.needs-validation').hide();
        $("#FormVasos").show();
    })
    $("#raios").click(function () {
        $('.t').css({
            "background-image": 'url("")'
        });
        $('.d2').hide();
        $('.d').show();
        $('input').val("");
        $('.needs-validation').hide();
        $("#FormRaios").show();
    })

    $("#amostra").click(function () {
        $('.t').css({
            "background-image": 'url("")'
        });
        $('.d2').hide();
        $('.d').show();
        $('input').val("");
        $('.needs-validation').hide();
        $("#FormAmostra").show();
    })
    $("#lamina").click(function () {
        $('.t').css({
            "background-image": 'url("")'
        });
        $('.d2').hide();
        $('.d').show();
        $('input').val("");
        $('.needs-validation').hide();
        $("#FormLamina").show();
    })
    $("#parenquima").click(function () {
        $('.t').css({
            "background-image": 'url("")'
        });
        $('.d2').hide();
        $('.d').show();
        $('input').val("");
        $('.needs-validation').hide();
        $("#FormParenquima").show();
    })
    $("#organolepticas").click(function () {
        $('.t').css({
            "background-image": 'url("")'
        });
        $('.d2').hide();
        $('.d').show();
        $('input').val("");
        $('.needs-validation').hide();
        $("#FormOrganolepticas").show();
    })
    $("#imagens").click(function () {
        $('.t').css({
            "background-image": 'url("")'
        });
        $('.d2').hide();
        $('.d').show();
        $('input').val("");
        $('.needs-validation').hide();
        $("#FormImagens").show();
    })

    $("#iconRadio").click(function () {
        var $button = $('.button').clone();
        $('.package').html($button);
    })
});