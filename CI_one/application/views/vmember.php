<?php $this->load->view('header'); ?> 

<div class="container"> 
    <!-- Main component for a primary marketing message or call to action --> 
    <div class="panel panel-default">
        <div class="panel-heading">
            <b>Daftar Member</b>
        </div> 
        <div class="panel-body"> 
            <p><?php echo $this->session->flashdata('pesan') ?> </p> 
            <a href="<?php echo base_url() ?>member/form/add" class="btn btn-sm btn-primary">
                <i class="glyphicon glyphicon-plus"></i> Tambah Member Baru</a> 

            <table class="table table-striped"> 
                <thead> 
                    <tr> 
                        <th>No.</th> 
                        <th>Member No.</th> 
                        <th>Name</th> 
                        <th>Fullname</th> 
                        <th>Gender</th> 
                        <th>Address</th> 
                        <th>Job</th> 
                        <th>Marital Status</th> 
                        <th>External No</th> 
                        <th>Action</th> 
                    </tr> 
                </thead> 
                <tbody> 
                    <?php if (empty($qmember)) { ?>
                        <tr> 
                            <td colspan="9">Data tidak ditemukan</td> 
                        </tr> 
                    <?php
                    } else {
                        $no = 0;
                        foreach ($qmember as $rowmember) {
                            $no++;
                            ?> 
                            <tr> 
                                <td><?php echo $no ?></td>
                                <td><?php echo $rowmember->member_no ?></td> 
                                <td><?php echo $rowmember->name ?></td>
                                <td><?php echo $rowmember->fullname ?></td> 
                                <td><?php if ($rowmember->gender == "1"){ echo "Pria"; }else{ echo "Wanita"; }  ?></td>
                                <td><?php echo $rowmember->address ?></td>
                                <td><?php echo $rowmember->job ?></td>
                                <td><?php if ($rowmember->m_status == "1"){ echo "Single"; }else{ echo "Married"; }  ?></td>
                                <td><?php echo $rowmember->external ?></td>
                                <td><a href="<?php echo base_url() ?>member/form/edit/<?php echo $rowmember->id ?>" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-pencil"></i></a> 
                                    <a href="<?php echo base_url() ?>member/detail/<?php echo $rowmember->id ?>" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-search"></i></a> 
                                    <a href="<?php echo base_url() ?>member/hapus/<?php echo $rowmember->id ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda Yakin menghapus data ini?')"><i class="glyphicon glyphicon-trash"></i></a>
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