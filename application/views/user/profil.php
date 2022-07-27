
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
	</div>
	<!-- end breadcrumb section -->

    <div class="mb-150 mt-150">
		<div class="container">   
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="<?= base_url() ?>assets/img/avatar/<?= $user['avatar']; ?>" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4><?= $user['nama']; ?></h4>
                      <p class="text-secondary mb-1">Bergabung <?= date('F Y', strtotime($user['created_at'])); ?></p>
                        <br>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Nama Lengkap</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                       <?= $user['nama']; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Jenis Kelamin</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?= $user['jenis_kelamin']; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Nomor Telepon</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?= $user['no_telp']; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?= $user['email']; ?>
                    </div>
                  </div>
                  <br>
                  <br>
                  <div class="row">
                    <div class="col-sm-12">
                      <a href="<?= base_url('user/edit/' . $user['user_id']) ?>" class="btn btn-dark">Edit</a>
                      <a href="<?= base_url('auth/logout'); ?>" data-toggle="modal" data-target="#logoutModal" class="btn btn-danger">Keluar</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Apakah Anda Ingin Keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <a class="btn btn-danger" href="<?= base_url('auth/logout'); ?>">Keluar</a>
                </div>
            </div>
        </div>
    </div>