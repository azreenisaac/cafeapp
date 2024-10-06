<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark"> <!--begin::Sidebar Brand-->
    <div class="sidebar-brand"> <!--begin::Brand Link--> <a href="../index.html" class="brand-link"> <!--begin::Brand Image--> <img src="<?= base_url() ?>assets/dist/assets/img/AdminLTELogo.png" alt="CafeAPP Logo" class="brand-image opacity-75 shadow"> <!--end::Brand Image--> <!--begin::Brand Text--> <span class="brand-text fw-light">CafeAPP</span> <!--end::Brand Text--> </a> <!--end::Brand Link--> </div> <!--end::Sidebar Brand--> <!--begin::Sidebar Wrapper-->
    <div class="sidebar-wrapper">
        <nav class="mt-2"> <!--begin::Sidebar Menu-->
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                <li class="nav-item"> <a href="<?= base_url() ?>admin" class="nav-link <?= isset($title) && $title == 'My Dashboard' ? 'active' : '' ?>"> <i class="nav-icon bi bi-speedometer"></i>
                        <p>Dashboard</p>
                    </a> </li>
                <li class="nav-header">USER ACCOUNTS</li>
                <li class="nav-item"> <a href="<?= base_url() ?>adminlist" class="nav-link <?= isset($title) && $title == 'Admin List' ? 'active' : '' ?>" class="nav-link"> <i class="nav-icon bi bi-headset"></i>
                        <p>Admin List</p>
                    </a> </li>
                <li class="nav-item"> <a href="<?= base_url() ?>stafflist" class="nav-link <?= isset($title) && $title == 'Cafe Staff List' ? 'active' : '' ?>" class="nav-link"> <i class="nav-icon bi bi-cookie"></i>
                        <p>Cafe Staff List</p>
                    </a> </li>
                <li class="nav-item"> <a href="<?= base_url() ?>studentlist" class="nav-link <?= isset($title) && $title == 'Student List' ? 'active' : '' ?>" class="nav-link"> <i class="nav-icon bi bi-backpack"></i>
                        <p>Student List</p>
                    </a> </li>
                <li class="nav-header">CAFE MANAGEMENT</li>
                <li class="nav-item"> <a href="<?= base_url() ?>cafelist" class="nav-link <?= isset($title) && $title == 'Cafe List' ? 'active' : '' ?>" class="nav-link"> <i class="nav-icon bi bi-building-add"></i>
                        <p>Create Cafe</p>
                    </a> </li>
                <!-- <li class="nav-item"> <a href="<?= base_url() ?>performance" class="nav-link <?= isset($title) && $title == 'Cafe Performance' ? 'active' : '' ?>" class="nav-link"> <i class="nav-icon bi bi-graph-up"></i>
                        <p>Cafe Performance</p>
                    </a> </li> -->
                <li class="nav-header">CUSTOMER ENGAGEMENT</li>
                <li class="nav-item"> <a href="<?= base_url() ?>customer-reviews" class="nav-link <?= isset($title) && $title == 'Customer Reviews' ? 'active' : '' ?>" class="nav-link"> <i class="nav-icon bi bi-star"></i>
                        <p>Customer Reviews</p>
                    </a> </li>
                <li class="nav-item"> <a href="<?= base_url() ?>support-ticket" class="nav-link <?= isset($title) && $title == 'Support Ticket' ? 'active' : '' ?>" class="nav-link"> <i class="nav-icon bi bi-ticket"></i>
                        <p>Support Ticket</p>
                    </a> </li>
            </ul> <!--end::Sidebar Menu-->
        </nav>
    </div> <!--end::Sidebar Wrapper-->
</aside>