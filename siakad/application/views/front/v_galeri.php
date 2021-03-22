
  <div class="gallery-wrap">
    <div class="container">
<!-- Style 2 -->
<div class="row">
  <div class="col-md-12">
    <h3 class="gallery-style">Galeri Foto</h3>
  </div>
</div><br>
<div class="row">
  <div class="col-md-12">
    <div id="gallery">
      <div id="gallery-content">
        <div id="gallery-content-center">
          <?php foreach ($galeri->result() as $row) : ?>
            <a href="<?php echo base_url().'assets/img/galeri'.$row->foto;?>" class="image-link2">
             <img src="<?php echo base_url().'assets/img/galeri/'.$row->foto;?>" class="all img-fluid" alt="#" style="width: 50%" >
            </a>
          <?php endforeach;?>
       </div>
     </div>
   </div>
 </div>
</div>
<!--//End Style 2 -->

</div>
</div>