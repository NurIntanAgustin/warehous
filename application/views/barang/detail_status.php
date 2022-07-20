
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
                </div>
				</div>

            </div>
            </div>
		</div>
	</div>
	<!-- end team section -->