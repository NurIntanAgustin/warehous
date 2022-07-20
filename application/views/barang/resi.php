
	
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
			<div class="contact-from-section mb-150">
				 	<div id="form_status"></div>
					<div class="contact-form">
						<form type="POST" id="fruitkha-contact" onSubmit="<?= base_url('barang/simpanresi') ?>">
							<div class="form-group">
								<label>Nama Barang</label>
								<input type="text" class="form-control form-control-user" id="nama_barang" name="nama_barang" style="border-radius: 10rem;height: 3.12rem; font-size: .8rem" placeholder="Nama Barang" required>
							</div>
							<div class="form-group">
								<label>Jumlah Barang</label>
								<input type="text" class="form-control form-control-user" id="jumlah_barang" name="jumlah_barang" style="border-radius: 10rem;height: 3.12rem; font-size: .8rem" placeholder="Jumlah Barang" required>
							</div>
							<div class="form-row">
							<div class="form-group col-md-6">
								<label>Resi</label>
								<input type="text" class="form-control form-control-user" id="resi" name="resi" style="border-radius: 10rem;height: 3.12rem; font-size: .8rem" placeholder="Resi" required>
							</div>
							<div class="form-group col-md-6">
								<label>Tanggal Kirim</label>
								<input type="date" class="form-control form-control-user" id="tgl_kirim" name="tgl_kirim" style="border-radius: 10rem;height: 3.12rem; font-size: .8rem" placeholder="Tanggal Kirim" required>
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

	
