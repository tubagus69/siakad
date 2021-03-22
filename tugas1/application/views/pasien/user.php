<div class="container" style="margin-top:20px">
    <div class="col-md-12">
        <h1 style="text-align : center; margin-bottom:30px"> Data Mahasiswa </h1>
    </div>

    <table class="table table-stripped table-bordered" id="list_mhs">
    <thead>
        <tr>
        <th>#</th>
        <th>No</th>
        <th>Nama</th>
        <th>alamat</th>
        <th>tanggallahir</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $no=1;
            foreach($pasien as $psn){?>
                <tr>
                    <td> <?= $no++; ?></td>
                    <td> <?= $psn->no; ?></td>
                    <td> <?= $psn->nama; ?></td>
                    <td> <?= $psn->alamat; ?></td>
                    <td> <?= $psn->tanggallahir; ?></td>
                </tr>
            <?php } ?>
    </tbody>
    </table>
</div>
<!--<h1> Ini halaman user </h1>
<h1>Hello, <?php echo $this->session->userdata('level'); ?>!</h1>
<a href=" <?= base_url().'login/logout';?>">Logout</a>-->