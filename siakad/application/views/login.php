<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Login Page</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sign-in/">

    <!-- Bootstrap core CSS -->
<link href="<?=base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


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
    <link href="<?=base_url('assets/css/signin.css')?>" rel="stylesheet">
  </head>
  <body class="text-center">
   <?php
   if($this->uri->segment(2)=='login'){
    ?>
        <?php
$pesan=$this->session->flashdata('pesan');
    $alert=explode("\n",$pesan);
    if(count($alert)>1){
    echo '<script>alert("'.$alert[0].'")</script>';  
    }
    ?>
 <form class="form-signin" method="post" action="<?=base_url('index.php/user/proses_login')?>">
    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
  <label for="inputUsername" class="sr-only">NIP/NIS</label>
  <input type="text" id="inputUsername" name="nip_nis" class="form-control" placeholder="NIP/NIS" autofocus>
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" style="margin-top: 2%" >
  <select name="tipe" class="form-control">
    <option value="guru">Guru</option>
    <option value="siswa">Siswa</option>
  </select>
  <button class="btn btn-lg btn-primary btn-block" style="margin-top: 2%" type="submit">Sign in</button>
  <p class="mt-5 mb-3 text-muted">&copy;2019</p>
</form>
    <?php
   }
   else{
    ?>
  <form class="form-signin" action="<?=base_url('index.php/user/proses_loginadmin')?>" method="post" >
    <?php
$pesan=$this->session->flashdata('pesan');
    $alert=explode("\n",$pesan);
    if(count($alert)>1){
    echo '<script>alert("'.$alert[0].'")</script>';  
    }
    ?>
    <h1 class="h3 mb-3 font-weight-normal">Admin Login</h1>
  <label for="inputUsername" class="sr-only">NIP</label>
  <input type="text" id="inputUsername" name="nip" class="form-control" placeholder="NIP" autofocus>
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" style="margin-top: 2%">
  <button class="btn btn-lg btn-primary btn-block" style="margin-top: 2%" type="submit">Sign in</button>
  <p class="mt-5 mb-3 text-muted">&copy;2019</p>
</form>
    <?php
   }
   ?>
</body>
</html>
