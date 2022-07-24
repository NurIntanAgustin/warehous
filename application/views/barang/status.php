
<!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg">
</div>
<!-- end breadcrumb section -->

    <!-- team section -->
<div class="mt-150">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2 text-center">
				<div class="section-title">
					<h3>Status <span class="orange-text">Barang</span></h3>
				</div>
			</div>
		</div>
		
        <!-- new layout -->
        <ul class="nav nav-pills mb-3 nav-justified" id="pills-tab" role="tablist">
			<li class="nav-item">
				<a class="nav-link active" id="pills-dalam-proses-tab" data-toggle="pill" href="#pills-dalam-proses" role="tab" aria-controls="pills-dalam-proses" aria-selected="true">Dalam Proses</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="pills-riwayat-pengiriman-tab" data-toggle="pill" href="#pills-riwayat-pengiriman" role="tab" aria-controls="pills-riwayat-pengiriman" aria-selected="false">Riwayat Pengiriman</a>
			</li>
		</ul>
		<div class="tab-content" id="pills-tabContent">
			<div class="tab-pane fade show active" id="pills-dalam-proses" role="tabpanel" aria-labelledby="pills-dalam-proses-tab">
				<?php if (count($allstatus) > 0): ?>
					<?php foreach ($allstatus as $status): ?>
	                    <div class="card mb-3">
	                        <div class="card-header">
								<div class="row">
									<div class="col">
										No Resi : <?= $status['resi']; ?>
									</div>
									<div class="col text-right">
										<a href="<?= base_url('barang/detail_status/' . $status['log_id']) ?>" class="btn btn-dark">Detail</a>
									</div>
								</div>
	                        </div>
	                        <div class="card-body">
	                            <h5 class="card-title">BOX <?= $status['box']; ?> <?= $status['nama_pengiriman']; ?> - <?= $status['nama_paket']; ?></h5>
	                            <p class="card-text">(<a target='blank' href="https://www.posindonesia.co.id/en/tracking/<?= $status['resi_pengiriman']; ?>"><?= $status['resi_pengiriman']; ?></a>) - <?= $status['status']; ?></p>
	                        </div>
	                    </div>
					<?php endforeach ?>
				<?php else: ?>
					<div class="card">
						<div class="card-body">
							Tidak ada data pengiriman dalam proses
						</div>
					</div>
				<?php endif ?>

				<!-- page container -->
				<div class="mb-150">
					<div class="row">
						<div class="container">
							<div class="row">
								<div class="col-lg-12 text-center">
									<div class="pagination-wrap" data='dalam_proses'>
										<ul>
											<li><a href="#">Prev</a></li>
											<li><a href="#">1</a></li>
											<li><a class="active" href="#">2</a></li>
											<li><a href="#">3</a></li>
											<li><a href="#">Next</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tab-pane fade" id="pills-riwayat-pengiriman" role="tabpanel" aria-labelledby="pills-riwayat-pengiriman-tab">
				<?php if (count($riwayat_pengiriman) > 0): ?>
					<?php foreach ($riwayat_pengiriman as $status): ?>
	                    <div class="card mb-3">
	                        <div class="card-header">
								<div class="row">
									<div class="col">
										No Resi : <?= $status['resi']; ?>
									</div>
									<div class="col text-right">
										<a href="<?= base_url('barang/detail_status/' . $status['log_id']) ?>" class="btn btn-dark">Detail</a>
									</div>
								</div>
	                        </div>
	                        <div class="card-body">
	                            <h5 class="card-title">BOX <?= $status['box']; ?> <?= $status['nama_pengiriman']; ?> - <?= $status['nama_paket']; ?></h5>
	                            <p class="card-text">(<a target='blank' href="https://www.posindonesia.co.id/en/tracking/<?= $status['resi_pengiriman']; ?>"><?= $status['resi_pengiriman']; ?></a>) - <?= $status['status']; ?></p>
	                        </div>
	                    </div>
					<?php endforeach ?>
				<?php else: ?>
					<div class="card">
						<div class="card-body">
							Tidak ada data riwayat pengiriman
						</div>
					</div>
				<?php endif ?>

				<!-- page container -->
				<div class="mb-150">
					<div class="row">
						<div class="container">
							<div class="row">
								<div class="col-lg-12 text-center">
									<div class="pagination-wrap" data='riwayat_pengiriman'>
										<ul>
											<li><a href="#">Prev</a></li>
											<li><a href="#">1</a></li>
											<li><a class="active" href="#">2</a></li>
											<li><a href="#">3</a></li>
											<li><a href="#">Next</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
        <!-- end of new layout -->
	</div>
</div>
<!-- end team section -->