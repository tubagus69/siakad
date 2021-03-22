<?php $this->load->view('header'); ?> 

<?php
if ($aksi == 'aksi_add') {
    $id = "";
    $member_no = "";
    $name = "";
    $fullname = "";
    $gender = "";
    $address = "";
    $job = "";
    $m_status = "";
    $external = "";
} else {
    foreach ($qdata as $rowdata) {
        $id = $rowdata->id;
        $member_no = $rowdata->member_no;
        $name = $rowdata->name;
        $fullname = $rowdata->fullname;
        $gender = $rowdata->gender;
        $address = $rowdata->address;
        $job = $rowdata->job;
        $m_status = $rowdata->m_status;
        $external = $rowdata->external;
    }
}
?> 
<div class="container"> 
    <!-- Main component for a primary marketing message or call to action --> 
    <div class="panel panel-default"> 
        <div class="panel-heading">
            <b>Form Member</b>
        </div> 
        <div class="panel-body"> 
            <?php echo $this->session->flashdata('pesan'); ?> 
            <form action="<?php echo base_url() ?>member/form/<?php echo $aksi ?>" method="post">
                <table class="table table-striped">
                    <tr> 
                        <td style="width:20%;">No Member</td> 
                        <td> 
                            <div class="col-sm-4"> 
                                <input type="hidden" name="id" class="form-control" value="<?php echo $id; ?>"> 
                                <input type="text" name="member_no" class="form-control" value="<?php echo $member_no; ?>"> 
                            </div> 
                        </td> 
                    </tr> 
                    <tr> 
                        <td>Name</td> 
                        <td> 
                            <div class="col-sm-4"> 
                                <input type="text" name="name" class="form-control" value="<?php echo $name ?>"> 
                            </div>
                        </td>
                    </tr>
                    <tr> 
                        <td>Fullname</td> 
                        <td> 
                            <div class="col-sm-6"> 
                                <input type="text" name="fullname" class="form-control" value="<?php echo $fullname; ?>"> 
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td> 
                        <td> 
                            <div class="col-sm-3"> 
                                <select name="gender" required="requreid" class="form-control"> 
                                    <option></option> 
                                    <option value="1" <?php
                                    if ($aksi == "aksi_edit") {
                                        if ($gender == '1') {
                                            echo "selected=selected";
                                        }
                                    }
                                    ?>>Pria</option> 
                                    <option value="0"  <?php
                                    if ($aksi == "aksi_edit") {
                                        if ($gender == '0') {
                                            echo"selected";
                                        }
                                    }
                                    ?>>Wanita</option> 
                                </select>
                            </div> 
                        </td> 
                    </tr> 
                    <tr> 
                        <td>Address</td> 
                        <td> 
                            <div class="col-sm-6"> 
                                <textarea name="address" class="form-control"><?php echo $address ?></textarea>                                 
                            </div> 
                        </td>
                    </tr>
                    <tr> 
                        <td>Job</td> 
                        <td> 
                            <div class="col-sm-4"> 
                                <input type="text" name="job" class="form-control" value="<?php echo $job ?>">
                            </div>
                        </td>
                    </tr> 
                    <tr> 
                        <td>Marital Status</td> 
                        <td> 
                            <div class="col-sm-4"> 
                                <select name="m_status" required="requreid" class="form-control"> 
                                    <option></option> 
                                    <option value="1" <?php
                                    if ($aksi == "aksi_edit") {
                                        if ($m_status == '1') {
                                            echo "selected=selected";
                                        }
                                    }
                                    ?>>Single</option> 
                                    <option value="0"  <?php
                                    if ($aksi == "aksi_edit") {
                                        if ($m_status == '0') {
                                            echo"selected";
                                        }
                                    }
                                    ?>>Married</option> 
                                </select>
                            </div> 
                        </td> 
                    </tr> 
                    <tr> 
                        <td>External</td> 
                        <td> 
                            <div class="col-sm-4"> 
                                 <input type="text" name="external" class="form-control" value="<?php echo $external ?>">
                            </div>
                        </td> 
                    </tr> 
                    <tr> 
                        <td colspan="2">
                            <input type="submit" class="btn btn-success" value="Simpan"> 
                            <button type="reset" class="btn btn-default">Batal</button> 
                        </td> 
                    </tr> 
                </table> 
            </form> 
        </div> 
    </div> 
    <!-- /panel --> 
</div>
<!-- /container --> 

<?php $this->load->view('footer'); ?> 