<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link href="<?php echo base_url('image/ass.jpg')?>" rel="icon">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  <title>GARUDA EMAS FC</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <span class="navbar-brand">Admin</span>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="<?= base_url(); ?>home/index">Home <span class="sr-only">(current)</span></a>
      <a href="<?= base_url().'Guru'; ?>" class="nav-item nav-link">Biodata Pelatih</a>
      <a href="<?= base_url().'siswa'; ?>" class="nav-item nav-link">Biodata Pemain</a>
      <a href="<?= base_url().'Skill'; ?>" class="nav-item nav-link">Skill</a>

      <!-- <a href="<?= base_url().'Guru/laporan_pdf'; ?>" class="nav-item nav-link">Cetak Guru</a> 
      <a href="<?= base_url().'Siswa/laporan_pdf'; ?>" class="nav-item nav-link">Cetak Staff</a> -->
      
      <a href="<?= base_url().'register/aktif'; ?>" class="nav-item nav-link">Aktif</a>



    </div>
  </div>
          <div class="float-right">
            <a href="<?= base_url().'login/index'; ?>" class="text-secondary" style="text-decoration:none;">Log Out</a>
          </div>
</nav>