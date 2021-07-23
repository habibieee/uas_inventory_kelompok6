<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Table Gudang </h1>
        <a href="<?= base_url('assets/') ?>#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-12 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold">Insert Data Gudang</h6>
                </div>
                <div class="card-body col-lg-12">
                    <div class="p-5">
                        <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                        </div>
                        <?php endif ?>
                        <form class="user" action="<?= base_url('admin/insertgudang'); ?>" method="POST">
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                        placeholder="Nama Gudang" name="namagudang">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user" id="exampleLastName"
                                        placeholder="Kepala Gudang" name="kepalagudang">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                        placeholder="Alamat Gudang" name="alamatgudang">
                                </div>
                                <div class="col-sm-6">
                                    <input type="date" class="form-control form-control-user" id="exampleLastName"
                                        placeholder="Tanggal Masuk " name="tanggalmasuk">
                                </div>
                            </div>
                            <button type="submit" class=" btn btn-primary btn-user btn-block">
                                SUBMIT
                            </button>
                            <hr>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->



</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="<?= base_url('assets/') ?>#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?= base_url('assets/') ?>login.html">Logout</a>
            </div>
        </div>
    </div>
</div>