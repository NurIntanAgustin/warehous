
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
					<h3>Tagihan <span class="orange-text">Tarif</span></h3>
				</div>
			</div>
		</div>
		<ul class="nav nav-pills mb-3 nav-justified" id="pills-tab" role="tablist">
			<li class="nav-item">
				<a class="nav-link active" id="pills-tagihan-tab" data-toggle="pill" href="#pills-tagihan" role="tab" aria-controls="pills-tagihan" aria-selected="true">Tagihan</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="pills-riwayat-tagihan-tab" data-toggle="pill" href="#pills-riwayat-tagihan" role="tab" aria-controls="pills-riwayat-tagihan" aria-selected="false">Riwayat Tagihan</a>
			</li>
		</ul>
		<div class="tab-content" id="pills-tabContent">
			<div class="tab-pane fade show active" id="pills-tagihan" role="tabpanel" aria-labelledby="pills-tagihan-tab">
				<?php if (count($alltagihan) > 0): ?>
					<?php foreach ($alltagihan as $no => $tagihan): ?>
						<div class="card">
							<div class="card-header">
								<div class="row">
									<div class="col">
										No Resi : <?= $tagihan['resi']; ?>
									</div>
									<div class="col text-right">
										<a href="<?= base_url('barang/detail_tagihan/'.$tagihan['tagihan_id']) ?>" class="btn btn-dark">Detail</a>
									</div>
								</div>
							</div>
							<div class="card-body">
								<div class="row">
									<div class="col">
										<h5 class="card-title">BOX <?= $tagihan['box']; ?> <?= $tagihan['nama_pengiriman']; ?> - <?= $tagihan['nama_paket']; ?></h5>
									</div>
									<div class="col text-right">
										<p class="card-text">Rp<?= number_format($tagihan['jumlah'],2,',','.'); ?></p>
									</div>
								</div>
							</div>
						</div>
						<br>
					<?php endforeach ?>
				<?php else: ?>
					<div class="card">
						<div class="card-body">
							Tidak ada data tagihan belum terbayar
						</div>
					</div>
				<?php endif ?>

				<!-- page container -->
				<div class="mb-150">
					<div class="row">
						<div class="container">
							<div class="row">
								<div class="col-lg-12 text-center">
									<div class="pagination-wrap">
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
			<div class="tab-pane fade" id="pills-riwayat-tagihan" role="tabpanel" aria-labelledby="pills-riwayat-tagihan-tab">
				<?php if (count($riwayat_tagihan) > 0): ?>
					<?php foreach ($riwayat_tagihan as $no => $tagihan): ?>
						<div class="card">
							<div class="card-header">
								<div class="row">
									<div class="col">
										No Resi : <?= $tagihan['resi']; ?>
									</div>
									<div class="col text-right">
										<a href="<?= base_url('barang/detail_tagihan/'.$tagihan['tagihan_id']) ?>" class="btn btn-dark">Detail</a>
									</div>
								</div>
							</div>
							<div class="card-body">
								<div class="row">
									<div class="col">
										<h5 class="card-title">BOX <?= $tagihan['box']; ?> <?= $tagihan['nama_pengiriman']; ?> - <?= $tagihan['nama_paket']; ?></h5>
									</div>
									<div class="col text-right">
										<p class="card-text">Rp<?= number_format($tagihan['jumlah'],2,',','.'); ?></p>
									</div>
								</div>
							</div>
						</div>
						<br>
					<?php endforeach ?>
				<?php else: ?>
					<div class="card">
						<div class="card-body">
							Tidak ada data tagihan berhasil
						</div>
					</div>
				<?php endif ?>
				
				<!-- page container -->
				<div class="mb-150">
					<div class="row">
						<div class="container">
							<div class="row">
								<div class="col-lg-12 text-center">
									<div class="pagination-wrap">
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
		<br>
	</div>
</div>
<!-- end team section -->