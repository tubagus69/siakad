<?php foreach($barang as $jns): ?>
<br>
<br>
    <center><b>Detail Barang</b></center>
    <center><img src="<?php echo base_url().'assets/admin/img/logo8.png' ?>"</center>
    <div class="container">
    <div class="row mt-5">
  
        <div class="col-md-12">
        <div class="card">
    
  <div class="card-body">

  <h5 class="card-title"><?=$jns->nama_barang?></h5>
 
  

 <p class="card-text">
     <label for=""><b> Nama Barang : </b></label>
     <?= $jns->nama_barang; ?>
 </p>
 <p class="card-text">
     <label for=""><b> Stok : </b></label>
     <?= $jns->stok; ?>
 </p>
 <p class="card-text">
     <label for=""><b> Harga : </b></label>
     <?= $jns->harga; ?>
 </p>
  
  </div>
</div>
<br>
<a href="<?= base_url();?>BarangClient/index" class="btn btn-primary">Kembali</a>
</div>
    </div>
        </div>
        <?php endforeach ?>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        
   
   
       
        
        <div class="col-md-12">
            <div class="border-top pt-5">
              <p>
              <br
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            <center>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Toko Grosir Jaya<i class="icon-heart text-danger" aria-hidden="true"></i>  </center>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            </div>
          </div>
          </body>
    