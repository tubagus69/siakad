

    <section class="our-teachers">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mb-5">Siswa Kami</h2>
                </div>
            </div>
            <div class="row">
                <?php foreach ($siswa->result() as $row) : ?>
                    <div class="col-xs-12 col-sm-6 col-md-2">
                        <div class="admission_insruction">
                            <img src="<?php echo base_url().'assets/img/profile/'.$row->foto;?>" class="img-fluid" alt="#">
                            <p class="text-center mt-3">Nama : <span><?php echo $row->nama_siswa;?></span>
                                <br>
                                Kelas : <span><?php echo $row->nama_kelas;?></span></p>
                        </div>
                    </div>
                <?php endforeach;?>
              </div>

        </div>
    </section>

