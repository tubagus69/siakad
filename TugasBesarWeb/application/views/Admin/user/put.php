
                      <!-- Content Wrapper. Contains page content -->
                      <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Admin dan Pengguna</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
            
          <div class ="card">
                    <div class="card-header">
                        Form Edit Data Admin dan Kasir
                    </div>
                    <div class ="card-body">
                    <?php if (validation_errors()): ?>
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors(); ?>
                    </div>
                    <?php endif; ?>
                    <?php foreach($login as $jns):?>
                    <?php echo $this->session->flashdata('result'); ?>
                    <?= form_open('UserClient/put_process') ?>
                    <form action="" method="post">
                    <input type="hidden" name="id_login" value="<?= $jns->id_login;?>">
                    <div class="form-group">
                            <label for="merk">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama"
                            value="<?=$jns->nama;?>">
                    </div>

                    <div class="form-group">
                            <label for="merk">Username</label>
                            <input type="text" class="form-control" id="username" name="username"
                            value="<?=$jns->username;?>">
                    </div>

                    <div class="form-group">
                            <label for="merk">Password</label>
                            <input type="text" class="form-control" id="password" name="password"
                            value="<?=$jns->password;?>">
                    </div>


                    <div class="form-group">

                    <label for="status">Level Saat Ini</label>
                            <input type="text" class="form-control" id="level" name="level"
                            value="<?=$jns->level;?>"disabled> 
                            <br>

                    <label for="merk">Level</label>
                         <select class="form-control" name="level" id="level">
                            <option value="admin">admin</option>
                            <option value="user">user</option>
                         </select>
                       </div>
                       <div class="form-group">
                       <label for="status">Status Saat Ini</label>
                            <input type="text" class="form-control" id="status" name="status"
                            value="<?=$jns->status;?>"disabled> 
                            <br>

                    <label for="merk">Status</label>
                         <select class="form-control" name="status" id="status">
                            <option value="Aktif">aktif</option>
                            <option value="Belum aktif">pasif</option>
                         </select>
                       </div>
                      
                        <button type="submit" name="edit" class="btn btn-primary float-right">Edit</button>
                        </form>
                        <?php 
                        form_close();
                        ?>
                        <?php endforeach ?>
                        </div>
                    </div>

                    


</div>   


          </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->