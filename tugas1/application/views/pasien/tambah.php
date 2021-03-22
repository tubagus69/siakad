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
                    <div class="form-group">
                        <label for="no"> No </label>
                        <input type="number" class="form-control" id="no" name="no">
                    </div>
                    <div class="form-group">
                        <label for="nama"> Nama </label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="jeniskelamin"> Jenis Kelamin </label>
                        <input type="text" class="form-control" id="jeniskelamin" name="jeniskelamin">
                    </div>
                    <div class="form-group">
                        <label for="alamat"> Alamat </label>
                        <input type="text" class="form-control" id="alamat" name="alamat">
                    </div>
                    <div class="form-group">
                        <label for="tanggallahir"> Tanggal Lahir </label>
                        <input type="date" class="form-control" id="tanggallahir" name="tanggallahir">
                    </div>
                    <div class="form-group">
                        <label for="norekammedik"> No Rekam Medik </label>
                        <input type="number" class="form-control" id="norekammedik" name="norekammedik">
                    </div>
                    <div class="form-group">
                        <label for="tanggalkedokter"> Tanggal Kedokter </label>
                        <input type="date" class="form-control" id="tanggalkedokter" name="tanggalkedokter">
                    </div>
                    <div class="form-group">
                        <label for="diagnosa"> Diagnosa </label>
                        <input type="text" class="form-control" id="diagnosa" name="diagnosa">
                    </div>
                    <div class="form-group">
                        <label for="penanganan"> Penanganan </label>
                        <input type="text" class="form-control" id="penanganan" name="penanganan">
                    </div>
                    </div>
                    <button type="Submit" name="Submit" class="btn btn-primary float-right"> Submit </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
                    