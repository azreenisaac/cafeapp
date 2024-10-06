<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>
<main class="app-main"> <!--begin::App Content Header-->
    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0"><?= $title ?></h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#"><?= $title ?></a></li>
                    </ol>
                </div>
            </div> <!--end::Row-->
        </div> <!--end::Container-->
    </div> <!--end::App Content Header--> <!--begin::App Content-->
    <div class="app-content"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-12"> <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <a href="<?= base_url() ?>add-student" class="btn btn-primary float-right"><i class="bi bi-plus"></i>
                                Register Student Account
                            </a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Username</th>
                                        <th>Full Name</th>
                                        <th>Email</th>
                                        <th>Student ID</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>mimi.cute</td>
                                        <td>Mimi Umairah binti Akmal</td>
                                        <td>mimiumairahbintiakmal@puo.com.my</td>
                                        <td>01DKM13F1083</td>
                                        <td><span class="badge text-bg-success">Active</span></td>
                                        <td style="width: 10px">
                                            <div class="btn-group mb-2" role="group" aria-label="Basic outlined example">
                                                <a href="<?= base_url() ?>edit-student" type="button" class="btn btn-outline-primary"><i class="bi bi-pencil"></i></a>
                                                <a href="#" type="button" class="btn btn-outline-primary"><i class="bi bi-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>kitty.mei</td>
                                        <td>Ameirah binti Amran</td>
                                        <td>ameirahbintiamran@puo.com.my</td>
                                        <td>01DKM13F1084</td>
                                        <td><span class="badge text-bg-danger">Deactivated</span></td>
                                        <td style="width: 10px">
                                            <div class="btn-group mb-2" role="group" aria-label="Basic outlined example">
                                                <a href="<?= base_url() ?>edit-student" type="button" class="btn btn-outline-primary"><i class="bi bi-pencil"></i></a>
                                                <a href="#" type="button" class="btn btn-outline-primary"><i class="bi bi-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No.</th>
                                        <th>Username</th>
                                        <th>Full Name</th>
                                        <th>Email</th>
                                        <th>Student ID</th>
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