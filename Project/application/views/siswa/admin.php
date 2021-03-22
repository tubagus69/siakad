<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap 4 Website Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <style>
        .fakeimg {
            height: 200px;
            background: white;
        }
    </style>
</head>

<body>
    <div class="container" style="margin-left:10px">
        <div class="row">
            <div class="col-sm-4">
                <h2>About Team</h2>
                <h5>Logo of :</h5>
                <div class="fakeimg"><img src="<?php echo base_url('image/amd.png')?>" style="width:270px" alt=""></div>
               
                <h3>Some Links</h3>
                
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a class="nav-link " href="<?= base_url().'Skill/user'; ?>">Skill</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="<?= base_url().'siswa/admin'; ?>">Biodata Pemain</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="<?= base_url().'guru/user'; ?>">Pelatih</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li> -->
                </ul>
                <hr class="d-sm-none">
            </div>
            <div class="col-sm-8">
                <h2>GARUDA EMAS FC</h2>
                <h5>Biodata Pemain</h5>
                <!-- <div class="fakeimg" style="width:150%">Fake Image</div>
                <p>Some text..</p> -->
                <div class="container mt-20">
                    <table class="table wy-table-striped wy-table-bordered" id="myTable" style="width:105%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Tgl. Lahir</th>
                                <th>Posisi</th>
                                <th>Foto</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1;
                foreach ($siswa as $s):
            ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $s->nama; ?></td>
                                <td><?= $s->alamat ?></td>
                                <td><?= $s->nim ?></td>
                                <td><?= $s->keahlian ?></td>
                                <td> <img width="100" src="<?=base_url();?>image/<?=$s->foto;?>"></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>