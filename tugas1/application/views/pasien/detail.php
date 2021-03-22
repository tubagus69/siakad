<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                Detail Data 
            </div>
            <div class="card-body">
            
                <h5 class="card-title"><?= $pasien['no'];?></h5>
                <p class="card-text">
                    <label for=""><b> Nama:</b></label>
                    <?= $pasien ['nama']; ?></p>
                    <label for=""><b> Jenis Kelamin:</b></label>
                    <?= $pasien['jeniskelamin']; ?></p>
                    <label for=""><b> Alamat:</b></label>
                    <?= $pasien ['alamat']; ?><p>
                    <label for=""><b> Tanggal Lahir:</b></label>
                    <?= $pasien ['tanggallahir']; ?><p>
                    <label for=""><b> No Rekam Medik:</b></label>
                    <?= $pasien ['norekammedik']; ?><p>
                    <label for=""><b> Tanggal Kedokter:</b></label>
                    <?= $pasien ['tanggalkedokter']; ?><p>
                    <label for=""><b> Diagnosa:</b></label>
                    <?= $pasien ['diagnosa']; ?><p>
                    <label for=""><b> Penanganan:</b></label>
                    <?= $pasien ['penanganan']; ?><p>
                </p>
                <a href="<?= base_url();?>pasien" class="btn btn-primary">Kembali</a>
            </div>
        </div>
        </div>
    </div>
</div>