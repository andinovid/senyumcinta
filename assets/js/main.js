function success_alert(message) {
    $.confirm({
        icon: 'fa fa-check-circle',
        title: '<h3>Berhasil!</h3>',
        closeIcon: true,
        content: message,
        columnClass: 'col-md-5 col-md-offset-3 text-center',
        type: 'green',
        typeAnimated: true,
        buttons: {
            close: function() {
                $("#f-penawaran")[0].reset();
            }
        }
    });
}

$(document).ready(function() {

    $("input[name='akad']").on('click', function() {

        var radioValue = $("input[name='akad']:checked").val();
        if (radioValue == "akad" || radioValue == "pemberkatan") {
            $('#opsi_akad').removeClass('d-none');
        } else {
            $('#opsi_akad').addClass('d-none');
        }
    });

    $("input[name='resepsi']").on('click', function() {

        var radioValue = $("input[name='resepsi']:checked").val();
        if (radioValue == "y") {
            $('#opsi_resepsi').removeClass('d-none');
        } else {
            $('#opsi_resepsi').addClass('d-none');
        }
    });

    $("input[name='lamaran']").on('click', function() {

        var radioValue = $("input[name='lamaran']:checked").val();
        if (radioValue == "y") {
            $('#opsi_lamaran').removeClass('d-none');
        } else {
            $('#opsi_lamaran').addClass('d-none');
        }
    });

    $("input[name='penambahan']").on('click', function() {

        var radioValue = $("input[name='penambahan']:checked").val();
        if (radioValue == "y") {
            $('#opsi_penambahan').removeClass('d-none');
        } else {
            $('#opsi_penambahan').addClass('d-none');
        }
    });

    $('#f-penawaran').validate({ // initialize the plugin
        rules: {
            nama: {
                required: true
            },
            // email: {
            //     required: true,
            //     email: true,
            // },
            // nohp: {
            //     required: true,
            //     number: true
            // },
            // alamat: {
            //     required: true,
            // }

        },
        submitHandler: function(form) {
            $.ajax({
                type: 'post',
                url: 'main/proses_penawaran',
                dataType: "JSON",
                data: $('#f-penawaran').serialize(),
                beforeSend: function() {
                    $('#loader').removeClass('d-none');
                },
                success: function(data) {
                    if (data.status = "1") {
                        $('#loader').addClass('d-none');
                        success_alert(data.message);
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('gagal');
                }
            });
        }
    });



});