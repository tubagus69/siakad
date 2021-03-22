
    
<br>
<br>
<br>
<br>
<br>

    <div class="container gy-5">
    
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6 mx-auto">
                    <?php if($this->session->flashdata('pesan') == TRUE):?>
    <div class="alert alert-info alert-dismissible">
        <a href="login" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <?php echo $this->session->flashdata('result');?>
    </div>
    <?php endif; ?>
                    <body background = "<?=base_url();?>./assets/admin/img/2.jpg">
                        <div class="card rounded-0">
                            <div class="card-header">
                                <center><h3 class="mb-8"><font face="Franklin Gothic Book">LOGIN</font></h3></center>
                            </div>
                            <div class="card-body">
                                <?= form_open('login/proses_login') ?>
                                <form class="form" action="login/proses_login" role="form" autocomplete="off" id="formlogin" method="POST">
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control form-control-lg rounded-0" name="username" id="username" required="">
                                        <div class="invalid-feedback">Oops, you missed this one</div>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control form-control-lg rounded-0" name="password" id="password" required="" autocomplete="new-password">
                                        <div class="invalid-feedback">Enter your password too!</div>
                                    </div>
                                   
                                    <button type="submit" class="btn btn-dark btn-lg float-right" id="btnlogin">Login</button>
                                   
                                </form>
                                <?php form_close() ?>
                                 Do you have account? <a href =" <?=base_url();?>register">Sign Up</a>
                            </div>
                            
                         
                        </div>
                       
                       
                    </div>
                </div>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                
                
            </div>
          
        </div>
        
    </div>
   
