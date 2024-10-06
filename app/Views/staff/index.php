<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>
<main class="app-main"> <!--begin::App Content Header-->
    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">My Dashboard</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    </ol>
                </div>
            </div> <!--end::Row-->
        </div> <!--end::Container-->
    </div> <!--end::App Content Header--> <!--begin::App Content-->
    <div class="app-content"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box"> <span class="info-box-icon text-bg-primary shadow-sm"> <i class="bi bi-person-fill"></i> </span>
                        <div class="info-box-content"> <span class="info-box-text">Total User</span> <span class="info-box-number">
                                2 </span> </div> <!-- /.info-box-content -->
                    </div> <!-- /.info-box -->
                </div> <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box"> <span class="info-box-icon text-bg-danger shadow-sm"> <i class="bi bi-building-fill"></i> </span>
                        <div class="info-box-content"> <span class="info-box-text">Total Cafe</span> <span class="info-box-number">1</span> </div> <!-- /.info-box-content -->
                    </div> <!-- /.info-box -->
                </div> <!-- /.col --> <!-- fix for small devices only --> <!-- <div class="clearfix hidden-md-up"></div> -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box"> <span class="info-box-icon text-bg-success shadow-sm"> <i class="bi bi-star-fill"></i> </span>
                        <div class="info-box-content"> <span class="info-box-text">New Reviews</span> <span class="info-box-number">23</span> </div> <!-- /.info-box-content -->
                    </div> <!-- /.info-box -->
                </div> <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box"> <span class="info-box-icon text-bg-warning shadow-sm"> <i class="bi bi-ticket-fill"></i> </span>
                        <div class="info-box-content"> <span class="info-box-text">Pending Ticket</span> <span class="info-box-number">0</span> </div> <!-- /.info-box-content -->
                    </div> <!-- /.info-box -->
                </div> <!-- /.col -->
            </div> <!--end::Row-->
        </div> <!--end::Container-->
    </div> <!--end::App Content-->
</main>
<?= $this->endsection() ?>