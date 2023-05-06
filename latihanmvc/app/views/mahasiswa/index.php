<div class="container mt-3">
    <div class="row">
        <!-- flash message -->
        <div class="col-lg-6">
            <?php Flasher::Flasher(); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mb-3 tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
                Tambah Data Mahasiswa
            </button>
        </div>
    </div>

    <!-- cari -->
    <div class="row">
        <div class="col-lg-6">
            <form action="<?= BASEURL; ?>/mahasiswa/cari" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari mahasiswa ..." aria-label="Recipient's username" aria-describedby="button-addon2" name="keyword" id="keyword">
                    <button class="btn btn-primary" type="submit" id="button-addon2">Cari</button>
                </div>
            </form>
        </div>
    </div>

    <div class="row">

        <div class="col-lg-6">

            <h3>Daftar Mahasiswa</h3>

            <ul class="list-group">
                <?php foreach ($data["mahasiswa"] as $mhs) : ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center"><?= $mhs["nama"]; ?>
                        <div>
                            <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs["id"]; ?>" class="badge text-bg-primary text-decoration-none ">Detail</a>

                            <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs["id"]; ?>" class="badge text-bg-success text-decoration-none tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $mhs["id"]; ?>">Ubah</a>

                            <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs["id"]; ?>" class="badge text-bg-danger text-decoration-none " onclick="return confirm('Hapus Data ?')">Hapus</a>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>

        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="judulModalLabel">Tambah Data Mahasiswa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">

                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" aria-describedby="namaHelp" name="nama" autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label for="nrp" class="form-label">NRP</label>
                        <input type="number" class="form-control" id="nrp" aria-describedby="nrpHelp" name="nrp" autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" autocomplete="off">
                    </div>

                    <select class="form-select mt-3" aria-label="Default select example" id="jurusan" name="jurusan">
                        <option selected>Jurusan</option>
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Sastra Bahasa">Sastra Bahasa</option>
                        <option value="Akuntansi">Akuntansi</option>
                    </select>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
</div>