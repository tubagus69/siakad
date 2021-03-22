<!DOCTYPE html>
<html lang="en">
<head>
   
    
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
                        <a class="nav-link active" href="<?= base_url().'Skill/user'; ?>">Skill</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url().'siswa/admin'; ?>">Biodata Pemain</a>
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
        <h5>Ability Skill</h5>
        <div class="container mt-20">
        <div class="col-md-12">
        <h1 class="text-center mb-30"><?= $title ?></h1>
    </div>
    <table class="table wy-table-striped wy-table-bordered" id="myTable" style=width:105%>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Speed</th>
                <th>Dribble</th>
                <th>Power</th>
				<th>Rata-rata</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1;
                foreach ($pemain as $s):
            ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $s->nama; ?></td>
                <td><?= $s->speed ?></td>
                <td><?= $s->drible ?></td>
                <td><?= $s->power ?></td>
				<td><?= ($s->speed + $s->drible + $s->power) / 3 ?></td>
                
            </tr>
                <?php endforeach; ?>
            
        </tbody>
    </table>
</div>
</div>
</div>
</div>