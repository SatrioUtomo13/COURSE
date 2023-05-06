$(function () {

    // cari class tombolTambahData, ketika di klik jalankan fungsi
    $('.tombolTambahData').on('click', function () {
        $('#judulModalLabel').html('Tambah Data Mahasiswa');

        $('.modal-footer button[type = submit]').html('Tambah Data')
    })

    // cari class tampilModalUbah, ketika di klik jalankan fungsi 
    $('.tampilModalUbah').on('click', function () {
        $('#judulModalLabel').html('Ubah Data Mahasiswa');

        $('.modal-footer button[type = submit]').html('Ubah Data');

        $('.modal-body form').attr('action', 'http://localhost/latihanmvc/public/mahasiswa/ubah');

        const id = $(this).data('id');
        
        //buat ajax
        $.ajax({
            url: 'http://localhost/latihanmvc/public/mahasiswa/getUbah',
            data: { id: id },
            method: 'post',
            dataType : 'json',
            success: function (data) {
                $('#nama').val(data["nama"]);
                $('#nrp').val(data["nrp"]);
                $('#email').val(data["email"]);
                $('#jurusan').val(data["jurusan"]);
                $('#id').val(data["id"]);
            }
        });
    })
})