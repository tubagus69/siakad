        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">User</h1>
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
                        Form Tambah Data Admin dan Kasir
                    </div>
                    <div class ="card-body">
                    <?php if (validation_errors()): ?>
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors(); ?>
                    </div>
                    <?php endif; ?>
                    <?= form_open('UserClient/post_process') ?>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nim">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                        </div>
                        <div class="form-group">
                            <label for="nim">Username</label>
                            <input type="text" class="form-control" id="username" name="username">
                        </div>
                        <div class="form-group">
                            <label for="nim">Password</label>
                            <input type="text" class="form-control" id="password" name="password">
                        </div>
                        <div class="form-group">
                         <label for="">Level</label>
                         <select class="form-control" name="level" id="level">
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                         </select>
                       </div>
                       <div class="form-group">
                         <label for="">Status</label>
                         <select class="form-control" name="status" id="status">
                            <option value="aktif">aktif</option>
                            <option value="belum aktif">pasif</option>
                         </select>
                       </div>
                        <button type="submit" name="submit" class="btn btn-primary float-right">Submit</button>
                        </form>
                        <?php 
                        form_close(); ?>
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