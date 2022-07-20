
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
	</div>
	<!-- end breadcrumb section -->

    <div class="mb-150 mt-150">
    <div class="container">
		<div class="main-body">
			<div class="row">
				<div class="col-lg-4">
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
				<div class="col-lg-8">
					<div class="card">
						<div class="card-body">
                            <form action="<?= base_url('user/editprofil') ?>" method="POST">
                            <input type="hidden" name="user_id" value="<?= $user['user_id'] ?>" <div class="mb-3">
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Nama Lengkap</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" name="nama" class="form-control" value="<?= $user['nama'] ?>">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Jenis Kelamin</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" name="jenis_kelamin" class="form-control" value="<?= $user['jenis_kelamin'] ?>">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Nomor Telepon</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" name="no_telp" class="form-control" value="<?= $user['no_telp'] ?>">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Email</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" name="email" class="form-control" value="<?= $user['email'] ?>">
								</div>
							</div>

							<div class="row">
								<div class="col-sm-3"></div>
								<div class="col-sm-9 text-secondary">
                                    <button type="submit" class="btn btn-dark">Simpan</button>
								</div>
							</div>
                            <br>
                            </form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
    </div>