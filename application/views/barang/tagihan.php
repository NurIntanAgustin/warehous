
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
			<div class="card">
                <div class="card-body">
					<?php
					foreach ($alltagihan as $no => $tagihan) {
					?>
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
					<?php
						}
					?>
				</div>
            </div>
		</div>
	</div>
	<!-- end team section -->

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