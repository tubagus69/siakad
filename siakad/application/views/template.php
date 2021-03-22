<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Dashboard</title>

    <!-- Bootstrap core CSS -->
<link href="<?=base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="<?=base_url('assets/css/dashboard.css')?>" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="<?=base_url()?>"><?php
  $nav=$this->m_default->get_data('tblsekolah');
  if($nav->num_rows()==0){
    echo 'Akademik SD';
  }
  else{
   $a=$nav->row_array(); 
   echo $a['nama_sekolah'];
  }

  ?></a>
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="<?=base_url('index.php/user/logout')?>">Sign out</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
           <li class="nav-item">
            <a class="nav-link <?=@$active1?>" href="<?=base_url('index.php/user')?>">
              <i class="material-icons">home</i>
              Dashboard 
            </a>
          </li>
          <?php
          if($this->session->userdata('tipe')=='siswa')
          {
            ?>
                <li class="nav-item">
            <a class="nav-link <?=@$active11?>" href="<?=base_url('index.php/kalender/view_kalender')?>">
              <i class="material-icons">calendar_today</i>
              Kalender Akademik
            </a>
          </li>
            <li class="nav-item">
            <a class="nav-link <?=@$active14?>" href="<?=base_url('index.php/siswa/profil_siswa')?>">
              <i class="material-icons">perm_identity</i>
              Profil Siswa
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?=@$active12?>" href="<?=base_url('index.php/nilai/profil_nilai_siswa')?>">
              <i class="material-icons">pie_chart</i>
              Nilai Siswa
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?=@$active9?>" href="<?=base_url('index.php/jadwal/data_jadwal')?>">
              <i class="material-icons">assignment</i>
              Jadwal Mata Pelajaran
            </a>
          </li>
            <?php
          }elseif ($this->session->userdata('tipe')=='guru') {
            ?>
                <li class="nav-item">
            <a class="nav-link <?=@$active11?>" href="<?=base_url('index.php/kalender/view_kalender')?>">
              <i class="material-icons">calendar_today</i>
              Kalender Akademik
            </a>
          </li>
              <li class="nav-item">
            <a class="nav-link <?=@$active14?>" href="<?=base_url('index.php/guru/profil_guru')?>">
              <i class="material-icons">perm_identity</i>
              Profil Guru
            </a>
          </li>
              <li class="nav-item">
            <a class="nav-link <?=@$active6?>" href="<?=base_url('index.php/nilai/data_nilai')?>">
              <i class="material-icons">score</i>
              Data Nilai
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?=@$active9?>" href="<?=base_url('index.php/jadwal/data_jadwal')?>">
              <i class="material-icons">assignment</i>
              Jadwal Mata Pelajaran
            </a>
          </li>
            <?php
          }else{
            ?>
            <li class="nav-item">
            <a class="nav-link <?=@$active10?>" href="<?=base_url('index.php/admin/data_admin')?>">
              <i class="material-icons">perm_identity</i>
              Data Admin
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?=@$active2?>" href="<?=base_url('index.php/guru/data_guru')?>">
              <i class="material-icons">assessment</i>
              Data Guru
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?=@$active8?>" href="<?=base_url('index.php/kelas/data_kelas')?>">
              <i class="material-icons">group</i>
              Data Kelas
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?=@$active9?>" href="<?=base_url('index.php/jadwal/data_jadwal')?>">
              <i class="material-icons">assignment</i>
              Data Jadwal
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?=@$active3?>" href="<?=base_url('index.php/siswa/data_siswa')?>">
              <i class="material-icons">portrait</i>
              Data Siswa
            </a>
          </li>
        
          <li class="nav-item">
            <a class="nav-link <?=@$active4?>" href="<?=base_url('index.php/kurikulum/data_kurikulum')?>">
              <i class="material-icons">assignment_turned_in</i>
              Data Kurikulum
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?=@$active5?>" href="<?=base_url('index.php/mapel/data_mapel')?>">
              <i class="material-icons">book</i>
              Data Mapel
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?=@$active11?>" href="<?=base_url('index.php/kalender/data_kalender')?>">
              <i class="material-icons">calendar_today</i>
              Kalender Akademik
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?=@$active7?>" href="<?=base_url('index.php/sekolah/data_sekolah')?>">
              <i class="material-icons">school</i>
              Data Sekolah
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?=@$active13?>" href="<?=base_url('index.php/galeri/data_galeri')?>">
              <i class="material-icons">insert_photo</i>
              Data Galeri
            </a>
          </li>
            <?php
          }
          ?>
        </ul>
      </div>
    </nav>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><?=@$judul?></h1>
        
      </div>
    <?php
    $this->load->view($konten);
    ?>
  </main>
  </div>
</div>

<script src="<?=base_url('assets/js/jquery-3.2.1.js')?>"> </script>
  <script src="<?=base_url('assets/js/bootstrap.js')?>">
  </script>
  
</body>
</html>
