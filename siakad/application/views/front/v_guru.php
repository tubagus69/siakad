    <section class="our-teachers">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mb-5">Guru Kami</h2>
                </div>
            </div>
            <div class="row">
                <?php foreach ($guru->result() as $row) : ?>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="admission_insruction">
                            <img src="<?php echo base_url().'assets/img/profile/'.$row->foto;?>" class="img-fluid" alt="#">
                            <p class="text-center mt-3">Nama : <span><?php echo $row->nama_guru;?></span>
                                <br>
                                Tempat Lahir : <span><?php echo $row->tempat_lahir;?></span>
                                <br>
                                Jabatan : <span><?php echo $row->jabatan;?></span>
                                <br></p>
                        </div>
                    </div>
                <?php endforeach;?>
              </div>
        </div>
    </section>
