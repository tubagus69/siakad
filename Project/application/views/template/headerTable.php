<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link href="<?php echo base_url('image/ass.jpg')?>" rel="icon">
  <title>GARUDA MAS FC</title>
  <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

<style>
footer {
    background-color: #2d2d30;
    color: #f5f5f5;
    padding: 32px;
  }
  footer a {
    color: #f5f5f5;
  }
  footer a:hover {
    color: #777;
    text-decoration: none;
  } 
</style>

</head>
<body>
<div class="jumbotron text-center" style="margin-bottom" >
  <h1> GARUDA EMAS FC</h1>
  <p>Sport Team Futsat School</p> 
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <span class="text-white">GARUDA EMAS FC</span>
  <button class="navbar-toggler text-white" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation text-white">
    <span class="navbar-toggler-icon text-white"></span>
  </button>
  <div class="collapse navbar-collapse text-white" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link text-white" href="<?= base_url(); ?>home/user">Home <span class="sr-only">(current)</span></a>
      <a href="<?= base_url().'guru/user'; ?>" class="nav-item nav-link nav-item nav-link text-white">Data Pelatih</a>
      <a href="<?= base_url().'siswa/admin'; ?>" class="nav-item nav-link nav-item nav-link text-white">Data Pemain</a>
      <a href="<?= base_url().'Skill/user'; ?>" class="nav-item nav-link nav-item nav-link text-white">Data Ability Pemain</a>

      <a href="<?= base_url().'Guru/laporan_pdf'; ?>" class="nav-item nav-link nav-item nav-link text-white">Cetak Pelatih</a>
      <a href="<?= base_url().'siswa/laporan_pdf'; ?>" class="nav-item nav-link nav-item nav-link text-white">Cetak Data Pemain</a>  
      <a href="<?= base_url().'Skill/laporan_pdf'; ?>" class="nav-item nav-link nav-item nav-link text-white">Cetak Data Skill Pemain</a>  
      
     
    </div>
  </div>
          <div class="float-right">
            <a href="<?= base_url().'login/index'; ?>" class="text-secondary" style="text-decoration:none;">Log Out</a>
          </div>
</nav>