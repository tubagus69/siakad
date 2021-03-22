<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?= base_url('homeview'); ?>">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Overview</li>
</ol>

<!-- Icon Cards-->
<div class="row">
    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fas fa-user-plus"></i>
                </div>
                <div class="mr-5">Data Nasabah</div>
            </div>
            <a class="card-footer text-black clearfix small z-1" href="<?= base_url('Nasabah/index') ?>">
                <span class="float-left">View Details</span>
                <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                </span>
            </a>
        </div>
    </div>


    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fas fa-laptop"></i>
                </div>
                <div class="mr-5">Data Setoran</div>
            </div>
            <a class="card-footer text-black clearfix small z-1" href="<?= base_url('Setor/index') ?>">
                <span class="float-left">View Details</span>
                <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                </span>
            </a>
        </div>
    </div>

    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fas fa-dollar-sign"></i>
                </div>
                <div class="mr-5">Data Nabung</div>
            </div>
            <a class="card-footer text-black clearfix small z-1" href="<?= base_url('Nabung/index') ?>">
                <span class="float-left">View Details</span>
                <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                </span>
            </a>
        </div>
    </div>

    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fas fa-fw fa-users-cog"></i>
                </div>
                <div class="mr-5">Data Petugas</div>
            </div>
            <a class="card-footer text-black clearfix small z-1" href="<?= base_url('Petugas/index') ?>">
                <span class="float-left">View Details</span>
                <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                </span>
            </a>
        </div>
    </div>

    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-secondary o-hidden h-100">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fas fa-cart-arrow-down"></i>
                </div>
                <div class="mr-5">Data Jemput Sampah</div>
            </div>
            <a class="card-footer text-black clearfix small z-1" href="<?= base_url('JemputSampah/index') ?>">
                <span class="float-left">View Details</span>
                <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                </span>
            </a>
        </div>
    </div>
</div>
</div>