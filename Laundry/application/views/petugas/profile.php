    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <?php if ($data->FOTO) { ?>
              <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url($data->FOTO) ?>" alt="User profile picture">
              <?php }else{ ?>
              <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url('dist/img/no_images.png') ?>" alt="User profile picture">
              <?php } ?>

              <h3 class="profile-username text-center"><?php echo $data->NAMA ?></h3>

              <p class="text-muted text-center"><?php echo $data->ALAMAT ?></p>

              <ul class="list-group list-group-unbordered">
                
              </ul>

              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#profile" data-toggle="tab">Profile</a></li>
              <li><a href="#settings" data-toggle="tab">Edit Profil</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="profile">
                <form class="form-horizontal">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Nama</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" value="<?php echo $data->NAMA ?>" readonly="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" value="<?php echo $data->EMAIL ?>" readonly="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Jenis Kelamin</label>

                    <div class="col-sm-10">
                      <input readonly="" type="text" class="form-control" value="<?php if($data->JENIS_KELAMIN == 'l'){echo 'laki-laki';}else{echo 'Perempuan';} ?>" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label">Alamat</label>

                    <div class="col-sm-10">
                      <textarea class="form-control" id="inputExperience" readonly=""><?php echo $data->ALAMAT ?></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">No Hp</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputSkills" readonly="" value="<?php echo $data->NO_HP ?>">
                    </div>
                  </div>
                  <!-- <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                  </div> -->
                </form>
              </div>
              <!-- /.tab-pane -->            
              <div class="tab-pane" id="settings">
                <form enctype="multipart/form-data" class="form-horizontal" method="post" action="<?php echo site_url('petugas/edit_profil'); ?>">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Nama</label>

                    <div class="col-sm-10">
                      <input type="text" name="nama" class="form-control" value="<?php echo $data->NAMA ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                      <input type="text" name="email" class="form-control" value="<?php echo $data->EMAIL ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Jenis Kelamin</label>

                    <div class="col-sm-10">
                      <select name="jk" class="form-control">
                        <option <?php if($data->JENIS_KELAMIN=='l'){echo "selected=''";}else{echo "";} ?> value="l">Laki-laki</option>
                        <option <?php if($data->JENIS_KELAMIN=='p'){echo "selected=''";}else{echo "";} ?> value="p">Perempuan</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label">Alamat</label>

                    <div class="col-sm-10">
                      <textarea class="form-control" name="alamat" id="inputExperience"><?php echo $data->ALAMAT ?></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">No Hp</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="no_hp" id="inputSkills" value="<?php echo $data->NO_HP ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Foto</label>

                    <div class="col-sm-10">
                      <input type="file" name="uploaded_file">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>