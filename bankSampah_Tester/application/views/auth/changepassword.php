<div class="container">

    <div class="card o-hidden border-0 shadow my-5 col-lg-7 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Change your password ?</h1>
                        </div>

                        <?= $this->session->flashdata('message'); ?>

                        <form class="user" method="post" action="<?= base_url('auth/changepassword'); ?>">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email Address ...." value="<?= set_value('email'); ?>">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-user" id="current_password" name="current_password" placeholder="Current Password">
                                <?= form_error('current_password', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class=" form-group">
                                <input type="password" class="form-control form-control-user" id="new_password1" name="new_password1" placeholder="New Password">
                                <?= form_error('new_password1', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class=" form-group">
                                <input type="password" class="form-control form-control-user" id="new_password2" name="new_password2" placeholder="Repeat New Password">
                                <?= form_error('new_password2', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Change Password
                            </button>
                            <button class="btn btn-white btn-user btn-block" href="<?= base_url('auth'); ?>">
                                Back to login
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>