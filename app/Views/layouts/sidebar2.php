<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark"> <!--begin::Sidebar Brand-->
    <div class="sidebar-brand"> <!--begin::Brand Link--> <a href="../index.html" class="brand-link"> <!--begin::Brand Image--> <img src="<?= base_url() ?>assets/dist/assets/img/AdminLTELogo.png" alt="CafeAPP Logo" class="brand-image opacity-75 shadow"> <!--end::Brand Image--> <!--begin::Brand Text--> <span class="brand-text fw-light">CafeAPP</span> <!--end::Brand Text--> </a> <!--end::Brand Link--> </div> <!--end::Sidebar Brand--> <!--begin::Sidebar Wrapper-->
    <div class="sidebar-wrapper">
        <nav class="mt-2"> <!--begin::Sidebar Menu-->
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                <li class="nav-item"> <a href="<?= base_url() ?>staff" class="nav-link <?= isset($title) && $title == 'My Dashboard' ? 'active' : '' ?>"> <i class="nav-icon bi bi-speedometer"></i>
                        <p>Dashboard</p>
                    </a> </li>
                <li class="nav-header">MY CAFE</li>
                <li class="nav-item"> <a href="<?= base_url() ?>staff/aboutcafe" class="nav-link <?= isset($title) && $title == 'About Cafe' ? 'active' : '' ?>" class="nav-link"> <i class="nav-icon bi bi-info-circle"></i>
                        <p>About Cafe</p>
                    </a> </li>
                <li class="nav-item"> <a href="<?= base_url() ?>staff/staff-list" class="nav-link <?= isset($title) && $title == 'Cafe Staff List' ? 'active' : '' ?>" class="nav-link"> <i class="nav-icon bi bi-people"></i>
                        <p>Cafe Staff List</p>
                    </a> </li>
                <li class="nav-header">CAFE MANAGEMENT</li>
                <li class="nav-item"> <a href="<?= base_url() ?>staff/cafemenu" class="nav-link <?= isset($title) && $title == 'Cafe Menu' ? 'active' : '' ?>" class="nav-link"> <i class="nav-icon bi bi-menu-button-wide"></i>
                        <p>Cafe Menu</p>
                    </a> </li>
                <li class="nav-item"> <a href="<?= base_url() ?>staff/menu-category" class="nav-link <?= isset($title) && $title == 'Menu Category' ? 'active' : '' ?>" class="nav-link"> <i class="nav-icon bi bi-grid"></i>
                        <p>Menu Category</p>
                    </a> </li>
                <li class="nav-header">CUSTOMER ENGAGEMENT</li>
                <li class="nav-item"> <a href="<?= base_url() ?>staff/customerreviews" class="nav-link <?= isset($title) && $title == 'Customer Reviews' ? 'active' : '' ?>" class="nav-link"> <i class="nav-icon bi bi-star"></i>
                        <p>Customer Reviews</p>
                    </a> </li>
                <li class="nav-item"> <a href="<?= base_url() ?>staff/ticket" class="nav-link <?= isset($title) && $title == 'Support Ticket' ? 'active' : '' ?>" class="nav-link"> <i class="nav-icon bi bi-ticket"></i>
                        <p>Support Ticket</p>
                    </a> </li>
            </ul> <!--end::Sidebar Menu-->
        </nav>
    </div> <!--end::Sidebar Wrapper-->
</aside>