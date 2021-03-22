<?php
  
?>

<?php
    echo form_open('register/reg_process');
?>
<br>
<br>
<br>
<br>
    <div class="container gy-5">
        <div class="row mt-1">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6 mx-auto">
                    <body background = "<?=base_url();?>./assets/admin/img/2.jpg">
                        <div class="card rounded-0">
                            <div class="card-header">
                                <center><h3 class="mb-8"><font face='Franklin Gothic Book'>REGISTER</font></h3></center>
                            </div>
                            <div class="card-body">
                        
                                <form class="form" action="register/reg_process" role="form" autocomplete="off" id="formlogin" method="POST">
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" class="form-control form-control-lg rounded-0" name="nama" id="nama" required="">
                                    </div>
                                   
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" class="form-control form-control-lg rounded-0" name="username" id="username" required="">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="text" class="form-control form-control-lg rounded-0" name="password" id="password" required="">
                                    </div>
                                   
                                    <button type="submit" class="btn btn-dark btn-lg float-right" id="btnlogin">Register</button>
                                   
                                </form>
                            </div>
                         
                        </div>
                       
                    </div>
                </div>
                <br>
                <br>
                
            </div>
          
        </div>
        
    </div>
    <?php
    form_close();
?>
