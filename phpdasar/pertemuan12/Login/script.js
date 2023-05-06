$(document).ready(function() {
    // hapus button cari
    $('#cari').hide();

    // hilangkan loader
    $('.loader').hide();

    // cari tombol keyword 
    $('#keyword').on('keyup', function() {
        // ajax menggunakan fungsi load
        //$('#container').load('ajax/search.php?keyword=' + $('#keyword').val());

        // munculkan loader
        $('.loader').show();

        // ajax menggunakan fungsi get
        $.get('ajax/search.php?keyword=' + $('#keyword').val(), function (data) {
            //ganti data didalam container
            $('#container').html(data);

            // setelah data ketemu, hapus loader
            $('.loader').hide();
        })
    })

    $('.cetak').on('click', function() {
        window.print();
    })
})

