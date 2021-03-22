<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <h2>Daftar Mahasiswa</h2>
                <ul class="list-group">
            <li class="list-group-item"> <?=$mahasiswa["nama"]?> </li>
            <li class="list-group-item"> <?=$mahasiswa["nim"]?> </li>
            <li class="list-group-item"> <?=$mahasiswa["email"]?> </li>
            <li class="list-group-item"> <?=$mahasiswa["jurusan"]?> </li>
            </ul>
            <a href="<?= base_url();?>" class="btn btn-primary"> KEMBALI </a>
            </div>
        </div>
    </div>
</div>