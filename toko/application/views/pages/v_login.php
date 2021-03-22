<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $title?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Aplikasi inventori sederhana dengan CI & Bootstrap">

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo base_url('asset/css/bootstrap.css')?>"/>
    <link rel="stylesheet" href="<?php echo base_url('asset/css/bootstrap-responsive.css')?>"/>
    <link rel="stylesheet" href="<?php echo base_url('asset/css/style.css')?>"/>
    <style>
        .chzn-container-single .chzn-search input{
            width: 100%;
        }
        body {
            padding-top: 70px;
            background-color: #999;
            color: #fff;
        }
        a{
            color: #002166;
        }
        a:hover{
            text-decoration: none;
            color: #fff;
        }
        .form-signin {
            max-width: 300px;
            padding: 19px 29px 29px;
            margin: 0 auto 20px;
            background-color: #666;
            border: 2px solid rgba(255,255,255,0.3);
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
            -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
            box-shadow: 0 1px 2px rgba(0,0,0,.05);
            color: #ffffff;
        }
        .form-signin:hover{
            border: 2px solid #fff;
        }
        .form-signin .form-signin-heading,
        .form-signin {
            margin-bottom: 10px;
        }
        .form-signin input[type="text"],
        .form-signin input[type="password"] {
            font-size: 16px;
            height: auto;
            margin-bottom: 15px;
            padding: 7px 9px;
        }
        .text-center{
            text-align: center;
        }
    </style>

    <!-- Fav icon -->
    

    <!-- JS -->
    <script type="text/javascript" src="<?php echo base_url('asset/js/jquery.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('asset/js/bootstrap.js')?>"></script>
</head>

<body>
<div class="container">

    <div class="loading navbar-fixed-top" style="display: none">
        <div class="progress progress-primary progress-striped active">
            <div class="bar" style="width: 100%;"></div>
        </div>
    </div>
    <br>
    <form class="form-signin" action="<?= site_url('login/cek_login')?>" method="post">
        <hr>
        <h4 class="form-signin-heading text-center">Sistem Aplikasi Toko</h4>

            <!-- NOTIF -->
            <?php
            $message = $this->session->flashdata('notif');
            if($message){
                echo '<p class="alert alert-danger text-center">'.$message .'</p>';
            }?>

        <hr>
        <input type="text" class="input-block-level" placeholder="Username" name="username" required="">
        <input type="password" class="input-block-level" placeholder="Password" name="password" required="">
        <button class="btn btn-large" type="submit">Sign in</button>
    </form>
    <hr>
    <div class="footer">
        <p>&copy; Created By : <a href="#" target="_blank"><strong>Sumber Mulia</strong></a></p>
    </div>
</div>
</body>

</html>
