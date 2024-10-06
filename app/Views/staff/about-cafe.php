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
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>staff/stafflist"><?= $title ?></a></li>
                    </ol>
                </div>
            </div> <!--end::Row-->
        </div> <!--end::Container-->
    </div> <!--end::App Content Header--> <!--begin::App Content-->
    <div class="app-content"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-12"> <!--begin::Form Validation-->
                    <div class="card card-info card-outline mb-4"> <!--begin::Header-->
                        <div class="card-header">
                            <div class="card-title">My Cafe Settings</div>
                        </div> <!--end::Header--> <!--begin::Form-->
                        <form class="needs-validation" novalidate> <!--begin::Body-->
                            <div class="card-body"> <!--begin::Row-->
                                <div class="row g-3 pb-3"> <!--begin::Col-->
                                    <div class="col-md-6"> <label for="validationCustom01" class="form-label">Cafe Name</label> <input type="text" class="form-control" id="validationCustom01" value="" required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div> <!--end::Col--> <!--begin::Col-->
                                    <div class="col-md-6"> <label for="validationCustom01" class="form-label">Cafe Tagline</label> <input type="text" class="form-control" id="validationCustom01" value="" required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div> <!--end::Col--><!--begin::Col-->
                                    <div class="col-md-6"> <label for="validationCustom01" class="form-label">Owner Name</label> <input type="text" class="form-control" id="validationCustom01" value="" required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div> <!--end::Col--> <!--begin::Col-->
                                    <div class="col-md-6"> <label for="validationCustom04" class="form-label">Category</label> <select class="form-select" id="validationCustom04" required>
                                            <option selected disabled value="">Choose...</option>
                                            <option>...</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please select a valid state.
                                        </div>
                                    </div> <!--end::Col-->
                                </div> <!--end::Row-->
                                <hr>
                            </div> <!--end::Body--> <!--begin::Footer-->
                            <div class="card-footer"> <button class="btn btn-info" type="submit">Update</button> </div> <!--end::Footer-->
                        </form> <!--end::Form--> <!--begin::JavaScript-->
                        <script>
                            // Example starter JavaScript for disabling form submissions if there are invalid fields
                            (() => {
                                "use strict";

                                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                const forms =
                                    document.querySelectorAll(".needs-validation");

                                // Loop over them and prevent submission
                                Array.from(forms).forEach((form) => {
                                    form.addEventListener(
                                        "submit",
                                        (event) => {
                                            if (!form.checkValidity()) {
                                                event.preventDefault();
                                                event.stopPropagation();
                                            }

                                            form.classList.add("was-validated");
                                        },
                                        false
                                    );
                                });
                            })();
                        </script> <!--end::JavaScript-->
                    </div> <!--end::Form Validation-->
                </div>
            </div> <!--end::Row-->
        </div> <!--end::Container-->
    </div> <!--end::App Content-->
</main>
<?= $this->endsection() ?>