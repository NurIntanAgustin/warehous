<style type="text/css">
	th { text-align: center; }
	.status_image { text-align: center; }
</style>
<!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg">
</div>
<!-- end breadcrumb section -->

<!-- team section -->
<div class="mb-150 mt-150">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2 text-center">
				<div class="section-title">
					<h3>Detail <span class="orange-text">status</span></h3>
				</div>
			</div>
		</div>
		<div class="card" style="max-width: 800px;margin: auto;">
			<div class="card-header">
				<h5 class="card-title">No Resi : <?= $status['resi']; ?></h5>
			</div>
			<div class="card-body">
			<div class="container">
				<div class="row mb-2">
					<div class="col">
							Nama Barang 
					</div>
					<div class="col text-right">
							<?= $status['nama_barang']; ?>
					</div>
				</div>
				<div class="row mb-2">
					<div class="col">
							Box 
					</div>
					<div class="col text-right">
					<?= $status['box']; ?> <?= $status['nama_pengiriman']; ?> - <?= $status['nama_paket']; ?>
					</div>
				</div>
				<div class="row mb-2">
					<div class="col">
							Status
					</div>
					<div class="col text-right">
                            <?= $status['status']; ?>
					</div>
				</div>
			</div>
			<div class="container-fluid">
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th>Warehouse Korea</th>
								<th>Warehouse Indonesia</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="status_image">
									<?php if (!empty($status['gambar_arrived_kr'])): ?>
										<img width="60%" src="<?= base_url('assets/img/activity/'.$status['gambar_arrived_kr']) ?>">
									<?php endif ?>
								</td>
								<td class="status_image">
									<?php if (!empty($status['gambar_arrived_ina'])): ?>
										<img width="60%" src="<?= base_url('assets/img/activity/'.$status['gambar_arrived_ina']) ?>">
									<?php endif ?>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			</div>

		</div>
		</div>
	</div>
</div>
<!-- end team section -->