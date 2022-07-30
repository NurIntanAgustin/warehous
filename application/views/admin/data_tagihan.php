<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title; ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url() ?>assets/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url() ?>assets/admin/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                <img src="<?= base_url() ?>assets/admin/img/CLOUDIFY.png" alt="">
                </div>
                <div class="sidebar-brand-text mx-3"></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0 mt-3">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin/data_user') ?>">
                    <i class="fas fa-solid fa-user"></i>
                    <span>Data Pengguna</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Barang
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin/data_barang') ?>">
                    <i class="fas fa-solid fa-box"></i>
                    <span>Data Barang</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="<?= base_url('admin/data_logistik') ?>">
                    <i class="fas fa-solid fa-truck"></i>
                    <span>Data Pengiriman</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('admin/data_tagihan') ?>">
                    <i class="fas fa-solid fa-comment-dollar"></i>
                    <span>Data Transaksi</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Warehouse
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-solid fa-money-bill"></i>
                    <span>Tarif</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= base_url('admin/data_tarif') ?>">Tarif Kirim dan Pajak</a>
                        <a class="collapse-item" href="<?= base_url('admin/data_fee') ?>">Tarif Warehouse</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin/data_metode') ?>">
                    <i class="fas fa-solid fa-cash-register"></i>
                    <span>Metode Pembayaran</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin/data_link') ?>">
                    <i class="fas fa-solid fa-link"></i>
                    <span>Link Checkout</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">


            

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-dark" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $user['nama']; ?></span>
                                <img class="img-profile rounded-circle"
                                    src="<?= base_url() ?>assets/img/avatar/<?= $user['avatar']; ?>">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="<?= base_url('auth/logout'); ?>">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Keluar
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between">
                        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
                    </div>
                    <hr class="mb-4">
                    
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Cari Kategori:
                                <span id="search_category"></span>
                            </button>
                            <div class="search-category-itemlist dropdown-menu">
                                <a class="search-category-item dropdown-item" data-search_by="status_tagihan">Status</a>
                                <a class="search-category-item dropdown-item" data-search_by="resi_barang_tagihan">Resi</a>
                            </div>
                        </div>
                        <input type="text" id='search_keyword' class="form-control bg-light border-0 small" placeholder="cari berdasarkan" aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-dark" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                    
                    <div class="row mt-3">
                        <div class="col-3">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="<?= base_url('admin/tagihan_create') ?>" class="btn btn-primary btn-sm">Tambah Data</a>
                                <a href="<?= base_url('admin/cetak_laporan') ?>" class="btn btn-success btn-sm">Cetak Laporan</a>
                            </div>
                        </div>
                    </div>

                    <div id="tabel_tagihan" class="table-responsive">
                        <table class="table mt-3">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Resi</th>
                                    <th scope="col">Berat</th>
                                    <th scope="col">Tarif Kirim<br>dan Pajak</th>
                                    <th scope="col">Tarif<br>Warehouse</th>
                                    <th scope="col">Jumlah</th>
                                    <th scope="col">Bukti</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Link</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($alltagihan as $no => $tagihan) {
                                ?>
                                    <tr>
                                        <th scope="row"><?= $no + 1 ?></th>
                                        <td><?= $tagihan['resi']; ?></td>
                                        <td><?= $tagihan['berat']; ?></td>
                                        <td>Rp <?= number_format($tagihan['tarif'] ?: 0, 0, ',', '.') ?></td>
                                        <td>Rp <?= number_format($tagihan['fee'] ?: 0, 0, ',', '.') ?></td>
                                        <td>Rp <?= number_format($tagihan['jumlah'] ?: 0, 0, ',', '.') ?></td>
                                        <td><a class="preview-bukti-tf" href="#" data-toggle="modal" data-target="#previewImageModal" data-bukti-tf="<?php echo $tagihan['bukti_tf']; ?>"><?= $tagihan['bukti_tf']; ?></a></td>
                                        <td><?= $tagihan['status_tf']; ?></td>
                                        <td><?= $tagihan['link']; ?></td>
                                        <td>
                                            <a href="<?= base_url('admin/tagihan_edit/' . $tagihan['tagihan_id']) ?>" class="btn btn-warning btn-sm">Edit</a>
                                            <a href="<?= base_url('admin/tagihan_hapus/' . $tagihan['tagihan_id']) ?>" class="btn btn-danger btn-sm">Hapus</a>
                                            <a href="<?= base_url('admin/tagihan_print/' . $tagihan['tagihan_id']) ?>" class="btn btn-success btn-sm">Print</a>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Cloudify Warehouse 2022 </span>
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

    <input type="hidden" name="base_url" value="<?= base_url(); ?>">
    <input type="hidden" name="bukti_tf_path" value="<?= base_url('assets/img/activity/bukti_transfer_konsumen/'); ?>">
    
    <!-- modal image -->
    <div class="modal fade" id="previewImageModal" tabindex="-1" role="dialog" aria-labelledby="previewImageModal"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <img class="image-bukti-tf">
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url() ?>assets/admin/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url() ?>assets/admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url() ?>assets/admin/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?= base_url() ?>assets/admin/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?= base_url() ?>assets/admin/js/demo/chart-area-demo.js"></script>
    <script src="<?= base_url() ?>assets/admin/js/demo/chart-pie-demo.js"></script>

    <script type="text/javascript">
        var search_by,
            base_url = $("[name='base_url']").val();
        
        $(document).on('click', '.search-category-item', function() {
            search_by = $(this).data('search_by').toLowerCase();
            $('span#search_category').html($(this).text());
            $('#search_keyword').select().focus();
        });

        $(document).on('keypress', '#search_keyword', function(event) {
            if (event.code.toLowerCase() == 'enter' && search_by != undefined) {
                let search_keyword = $(this).val();

                $.ajax({
                    url: base_url + 'admin/cari/' + search_by,
                    type: 'POST',
                    data: { 'keyword': search_keyword },
                    success: function(resp){
                        $('#tabel_tagihan').html(resp);
                    },
                    error: function(error){
                        console.log(error);
                    }
                });
            }
        })

        $(document).on('click', '.preview-bukti-tf', function() {
            let bukti_tf_path = $("[name='bukti_tf_path']").val();
            let bukti_tf_image = $(this).data('bukti-tf');
            $('.image-bukti-tf').attr('src', `${bukti_tf_path}${bukti_tf_image}`);
        });
    </script>
</body>

</html>