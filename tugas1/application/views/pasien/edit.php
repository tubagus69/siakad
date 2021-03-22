<div class="controller">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Tambah Data 
                </div>
                <div class="card-body">
                <?php if (validation_errors()):?>
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors() ;?>
                    </div>
                    <?php endif; ?>
                    <form action="" method="post">
                    <input type="hidden" name="no" value="<?= $pasien['no'];?>">
                    <div class="form-group">
                        <label for="nama"> Nama </label>
                        <input type="text" class="form-control" id="nama" name="nama" 
                        value="<?= $pasien ['nama'] ;?>">
                    </div>
                    <div class="form-group">
                        <label for="jeniskelamin"> Jenis Kelamin </label>
                        <input type="text" class="form-control" id="jeniskelamin" name="jeniskelamin" 
                        value="<?= $pasien ['jeniskelamin'] ;?>">
                    </div>
                    <div class="form-group">
                        <label for="alamat"> Alamat </label>
                        <input type="text" class="form-control" id="alamat" name="alamat" 
                        value="<?= $pasien ['alamat'] ;?>">
                    </div>
                    <div class="form-group">
                        <label for="tanggallahir"> Tanggal Lahir </label>
                        <input type="date" class="form-control" id="tanggallahir" name="tanggallahir" 
                        value="<?= $pasien ['tanggallahir'] ;?>">
                    <div class="form-group">
                        <label for="norekammedik"> No Rekam Medik </label>
                        <input type="number" class="form-control" id="norekammedik" name="norekammedik" 
                        value="<?= $pasien ['norekammedik'] ;?>">
                    <div class="form-group">
                        <label for="tanggalkedokter"> Tanggal Kedokter </label>
                        <input type="date" class="form-control" id="tanggalkedokter" name="tanggalkedokter" 
                        value="<?= $pasien ['tanggalkedokter'] ;?>">
                    <div class="form-group">
                        <label for="diagnosa"> Diagnosa </label>
                        <input type="text" class="form-control" id="diagnosa" name="diagnosa" 
                        value="<?= $pasien ['diagnosa'] ;?>">
                    <div class="form-group">
                        <label for="penanganan"> Penanganan </label>
                        <input type="text" class="form-control" id="penanganan" name="penanganan" 
                        value="<?= $pasien ['penanganan'] ;?>">
                
                    </div>
                    <button type="Submit" name="edit" class="btn btn-primary float-right"> Edit </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
                    