<?php
	$flash = $this->session->flashdata('resi_uploaded');
	$form_flash = $this->session->flashdata('form');
?>
	
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
						<h3>Formulir <span class="orange-text">Resi</span></h3>
						<p>Isi dengan informasi barang yang Anda dapatkan dari pesanan Anda</p>
					</div>
				</div>
			</div>
			<?php if (isset($flash)): ?>
				<?php if ($flash == 2): ?>
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
						Resi gagal dimasukkan: <?= $this->session->flashdata('resi_failed_message'); ?>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				<?php else: ?>
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						Resi berhasil dimasukkan
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				<?php endif ?>
			<?php endif ?>
			<div class="contact-from-section mb-150">
				 	<div id="form_status"></div>
					<div class="contact-form">
						<form method="post" id="fruitkha-contact" action="<?= base_url('barang/simpanresi') ?>" enctype="multipart/form-data">
							<div class="form-group">
								<label>Nama Barang</label>
								<input type="text" class="form-control form-control-user" id="nama_barang" name="nama_barang" value='<?= $form_flash['nama_barang'] ?? NULL ?>' style="border-radius: 10rem;height: 3.12rem; font-size: .8rem" placeholder="Nama Barang" required>
							</div>
							<div class="form-group">
								<label>Jumlah Barang</label>
								<input type="text" class="form-control form-control-user" id="jumlah_barang" name="jumlah_barang" value='<?= $form_flash['jumlah_barang'] ?? NULL ?>' style="border-radius: 10rem;height: 3.12rem; font-size: .8rem" placeholder="Jumlah Barang" required>
							</div>
							<div class="form-row">
							<div class="form-group col-md-6">
								<label>Resi</label>
								<input type="text" class="form-control form-control-user" id="resi" name="resi" value='<?= $form_flash['resi'] ?? NULL ?>' style="border-radius: 10rem;height: 3.12rem; font-size: .8rem" placeholder="Resi" required>
							</div>
							<div class="form-group col-md-6">
								<label>Tanggal Kirim</label>
								<input type="date" class="form-control form-control-user" id="tgl_kirim" name="tgl_kirim" value='<?= $form_flash['tgl_kirim'] ?? NULL ?>' style="border-radius: 10rem;height: 3.12rem; font-size: .8rem" placeholder="Tanggal Kirim" required>
							</div>
							</div>
							<div class="form-row">
							<div class="form-group col-md-6">
								<label for="paket_id">Jenis Paket</label>
								<select class="form-control" name="paket_id" id="paket_id" style="border-radius: 10rem;height: 3.12rem; font-size: .8rem">
								<?php $i = 1; foreach ($paket_list as $list): ?>
										<option value="<?= $list['paket_id'] ?>"><?= $list['nama_paket'] ?></option>
									<?php $i++; endforeach ?>
								</select>
							</div>
							<div class="form-group col-md-6">
								<label for="pengiriman_id">Jenis Ekspedisi</label>
								<select class="form-control" name="pengiriman_id" id="pengiriman_id" style="border-radius: 10rem;height: 3.12rem; font-size: .8rem">
									<?php $i = 1; foreach ($pengiriman_list as $list): ?>
										<option value="<?= $i ?>"><?= $list['nama_pengiriman'] ?></option>
										<?php $i++; endforeach ?>
								</select>
							</div>
							</div>
							<div class="form-group">
								<label>Gambar Barang / Bukti Pesanan</label>
								<input type="file" class="form-control form-control-user" id="gambar_barang" name="gambar_barang" style="border-radius: 10rem;height: 3.12rem; font-size: .8rem" placeholder="Gambar Barang" required>
							</div>
							<div class="form-group">
								<button type="submit" class="form-control btn btn-dark rounded submit px-3">Submit</button>
							</div>
						</form>
					</div>
				</div>
		</div>
	</div>
	<!-- end team section -->

	
