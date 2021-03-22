<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-code"></i>
        </div>
        <div class="sidebar-brand-text mx-3">BANK SAMPAH</div>
    </a>

    <!-- QUERY MENU -->

    <?php
    $role_id = $this->session->userdata('role_id');
    $queryMenu = "SELECT `user_menu`.`id`, `menu`
                FROM `user_menu`
                JOIN `user_access_menu`
                  ON `user_menu`.`id` = `user_access_menu`.`menu_id`
               WHERE `user_access_menu`.`role_id` = $role_id
            ORDER BY `user_access_menu`.`menu_id` ASC
             ";
    $menu = $this->db->query($queryMenu)->result_array();

    // var_dump($menu);
    // die;
    ?>

    <!-- LOOPING MENU -->
    <?php foreach ($menu as $mn) : ?>
        <hr class="sidebar-divider">

        <div class="sidebar-heading">
            <?= $mn['menu']; ?>
        </div>

        <!-- SIAPKAN SUB MENU SESUAI MENU -->
        <?php
        $menuId = $mn['id'];
        $querySubMenu = "SELECT  *
                  FROM `user_submenu` JOIN `user_menu` 
                    ON `user_submenu`.`menu_id` = `user_menu`.`id`
                  WHERE `user_submenu`.`menu_id` = $menuId
                    AND `user_submenu`.`is_active` = 1
                    ";
        $subMenu = $this->db->query($querySubMenu)->result_array();
        ?>

        <?php foreach ($subMenu as $sm) : ?>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url($sm['url']); ?>">
                    <i class="<?= $sm['icon']; ?>"></i>
                    <span><?= $sm['title']; ?></span></a>
            </li>

        <?php endforeach ?>

    <?php endforeach; ?>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('home'); ?>">
            <i class="fas fa-home"></i>
            <span>Home</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('setor_user'); ?>">
            <i class="fas fa-comments-dollar"></i>
            <span>Setor</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('nabung_user'); ?>">
            <i class="fas fa-university"></i>
            <span>Nabung</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('jemputsampah_user'); ?>">
            <i class="fas fa-cart-arrow-down"></i>
            <span>Jemput Sampah</span></a>
    </li>

    <!-- Divider -->
    <hr class=" sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->