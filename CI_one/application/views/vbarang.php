<?php $this->load->view('header'); ?> 

<div class="container"> 
    <!-- Main component for a primary marketing message or call to action --> 
    <div class="panel panel-default">
        <div class="panel-heading">
            <b>Daftar Barang</b>
        </div> 
        <div class="panel-body"> 
            <p><?php echo $this->session->flashdata('pesan') ?> </p> 
            <a href="<?php echo base_url() ?>barang/form/add" class="btn btn-sm btn-primary">
                <i class="glyphicon glyphicon-plus"></i> Tambah</a> 

            <table class="table table-striped"> 
                <thead> 
                    <tr> 
                        <th>No</th> 
                        <th>Barcode</th> 
                        <th>Nama</th> 
                        <th>Harga</th> 
                        <th>Jenis</th> 
                        <th>Satuan</th> 
                        <th>Stok</th> 
                        <th></th> 
                    </tr> 
                </thead> 
                <tbody> 
                    <?php if (empty($qbarang)) { ?>
                        <tr> 
                            <td colspan="8">Data tidak ditemukan</td> 
                        </tr> 
                    <?php
                    } else {
                        $no = 0;
                        foreach ($qbarang as $rowbarang) {
                            $no++;
                            ?> 
                            <tr> 
                                <td><?php echo $no ?></td>
                                <td><?php echo $rowbarang->barcode ?></td> 
                                <td><?php echo $rowbarang->nama_brg ?></td>
                                <td><?php echo $rowbarang->harga_brg ?></td> 
                                <td><?php echo $rowbarang->jenis ?></td>
                                <td><?php echo $rowbarang->satuan ?></td>
                                <td><?php echo $rowbarang->stok_brg ?></td>
                                <td><a href="<?php echo base_url() ?>barang/form/edit/<?php echo $rowbarang->kode_brg ?>" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-pencil"></i></a> 
                                    <a href="<?php echo base_url() ?>barang/detail/<?php echo $rowbarang->kode_brg ?>" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-search"></i></a> 
                                    <a href="<?php echo base_url() ?>barang/hapus/<?php echo $rowbarang->kode_brg ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda Yakin menghapus data ini?')"><i class="glyphicon glyphicon-trash"></i></a>
                                </td> 
                            </tr> 
                            <?php
                        }
                    }
                    ?> 
                </tbody> 
            </table> 
        </div> 
    </div> <!-- /panel --> 
</div> <!-- /container --> 
<?php $this->load->view('footer'); ?> 