<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?= $title ?></h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
            href="https://datatables.net">official DataTables documentation</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th style="text-align: center;">No</th>
                            <th style="text-align: center;">Nama </th>
                            <th style="text-align: center;">Jenis </th>
                            <th style="text-align: center;">Jumlah </th>
                            <th style="text-align: center;">Nama Supp</th>
                            <th style="text-align: center;">Email Supp</th>
                            <th style="text-align: center;">Tanggal Masuk</th>
                            <th style="text-align: center;">Nama Gudang</th>
                            <th style="text-align: center;">Alamat Gudang</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php $no=1;  foreach($barang as $brg ):?>
                            <th style="text-align: center;"><?= $no++; ?></th>
                            <th style="text-align: center;"><?= $brg['nama_barang']; ?></th>
                            <th style="text-align: center;"><?= $brg['jenis_barang']; ?></th>
                            <th style="text-align: center;"><?= $brg['jumlah_barang']; ?></th>
                            <th style="text-align: center;"><?= $brg['nama_supplier']; ?></th>
                            <th style="text-align: center;"><?= $brg['email_supplier']; ?></th>
                            <th style="text-align: center;"><?= $brg['tanggal_masuk']; ?></th>
                            <th style="text-align: center;"><?= $brg['nama_gudang']; ?></th>
                            <th style="text-align: center;"><?= $brg['alamat_gudang']; ?></th>
                            <?php  endforeach;?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
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
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>