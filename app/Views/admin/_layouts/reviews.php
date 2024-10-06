<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>
<main class="app-main"> <!--begin::App Content Header-->
    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Arab Cafe's Reviews</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>cafelist">Cafe List</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>add-cafe">Arab Cafe's Reviews</a></li>
                    </ol>
                </div>
            </div> <!--end::Row-->
        </div> <!--end::Container-->
    </div> <!--end::App Content Header--> <!--begin::App Content-->
    <div class="app-content"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box"> <span class="info-box-icon text-bg-success shadow-sm"> <i class="bi bi-check-circle"></i> </span>
                        <div class="info-box-content"> <span class="info-box-text">Total Reviews</span> <span class="info-box-number">
                                0 </span> </div> <!-- /.info-box-content -->
                    </div> <!-- /.info-box -->
                </div> <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box"> <span class="info-box-icon text-bg-info shadow-sm"> <i class="bi bi-inbox"></i> </span>
                        <div class="info-box-content"> <span class="info-box-text">Average Ratings</span> <span class="info-box-number">1</span> </div> <!-- /.info-box-content -->
                    </div> <!-- /.info-box -->
                </div> <!-- /.col --> 
            </div> <!--end::Row--><!--begin::Row-->
            <div class="row">
                <div class="col-12"> <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-3">
                                    <select class="form-select" id="validationCustom04" required>
                                        <option selected disabled value="">Choose User Type</option>
                                        <option>...</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-select" id="validationCustom04" required>
                                        <option selected disabled value="">Choose Ticket Type</option>
                                        <option>...</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Ticket ID</th>
                                        <th>Username</th>
                                        <th>User Type</th>
                                        <th>Issues</th>
                                        <th>Submit Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>20240922001</td>
                                        <td>amir.cafearab</td>
                                        <td>Cafe Staff</td>
                                        <td>Menu Updates</td>
                                        <td>2024-09-22 18:04:16</td>
                                        <td><span class="badge text-bg-info">Open</span></td>
                                        <td style="width: 10px">
                                            <div class="btn-group mb-2" role="group" aria-label="Basic outlined example">
                                                <button type="button" class="btn btn-outline-primary"><i class="bi bi-reply"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Ticket ID</th>
                                        <th>Username</th>
                                        <th>User Type</th>
                                        <th>Category</th>
                                        <th>Submit Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div> <!-- /.card -->
                </div>
            </div> <!--end::Row-->
        </div> <!--end::Container-->
    </div> <!--end::App Content-->
</main>
<?= $this->endsection() ?>