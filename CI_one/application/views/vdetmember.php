<?php $this->load->view('header'); ?> 
<?php
foreach ( $qmember as $rowdata) {
    $id = $rowdata->id;
    $member_no = $rowdata->member_no;
    $name = $rowdata->name;
    $fullname = $rowdata->fullname;
    $address = $rowdata->address;
    $gender = $rowdata->gender;
    $job = $rowdata->job;
    $m_status = $rowdata->m_status;
    $external = $rowdata->external;
}
?> 
<div class="container">
    <!-- Main component for a primary marketing message or call to action --> 
    <div class="panel panel-default"> 
        <div class="panel-heading">
            <b>Detail Member</b>
        </div> 
        <div class="panel-body"> 
            <p><a href="<?php echo base_url() ?>member" class="btn btn-sm btn-info"><i class="glyphicon glyphicon-repeat"></i> Kembali</a> </p> 
            <table class="table table-striped">
                <tr> 
                    <td>Member No</td> 
                    <td><?php echo $member_no; ?></td> 
                </tr>
                <tr> 
                    <td>Name</td>
                    <td><?php echo $name ; ?>
                    </td> 
                </tr> 
                <tr>
                    <td>Fullname</td>
                    <td><?php echo $fullname; ?></td> 
                </tr> 
                <tr>
                    <td>Gender</td>
                    <td><?php echo $gender; ?></td> 
                </tr>
                <tr> 
                    <td>Address</td> 
                    <td><?php echo $address; ?></td> 
                </tr> 
                <tr>
                    <td>Job</td>
                    <td><?php echo $job ; ?></td> 
                </tr> 
                <tr> 
                    <td>Marital Status</td>
                    <td><?php echo $m_status; ?>
                    </td> 
                </tr> 
                <tr> 
                    <td>External</td>
                    <td> <?php echo $external; ?>
                    </td> 
                </tr>
            </table> 
        </div> 
    </div>
    <!-- /panel --> 
</div> 
<!-- /container -->
<?php $this->load->view('footer');?> 