<div class="container">
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-header">
                    Detail User
                </div>
                <div class="card-body">
                    <h6 class="card-title"><b>Nama :</b>
                        <?= $user['name']; ?></h6>
                    <p class="card-text">

                        <p class="card-text">
                            <label for="email"><b>Email : </b></label>
                            <?= $user['email']; ?>
                        </p>

                        <p class="card-text">
                            <label for="image"><b>Image : </b></label>
                            <?= $user['image']; ?>
                        </p>
                        <p class="card-text">
                            <label for="password"><b> Password :</b></label>
                            <?= $user['password']; ?>
                        </p>
                        <p class="card-text">
                            <label for="role_id"><b> Role_id :</b></label>
                            <?= $user['role_id']; ?>
                        </p>

                        <p class="card-text">
                            <label for="is_active"><b> Is_Active :</b></label>
                            <?= $user['is_active']; ?>
                        </p>

                        <p class="card-text">
                            <label for="date_created"><b> Date Created :</b></label>
                            <?= $user['date_created']; ?>
                        </p>

                        <a href="<?= base_url("User/"); ?>" class="btn btn-primary">Kembali</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>