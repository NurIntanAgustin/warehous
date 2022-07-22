
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
			<div class="card">
                <div class="card-body">
					<?php foreach ($logistik_list as $status): ?>
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