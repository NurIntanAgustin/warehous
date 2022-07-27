
	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
	</div>
	<!-- end breadcrumb section -->

	<!-- featured section -->
	<div class="feature-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-7">
					<div class="featured-text">
						<h2 class="pb-3"><span class="orange-text">Cloudify Warehouse</span></h2>
						<div class="row">
							
							
							<div class="col-lg-9 col-md-6">
								<div class="list-box d-flex">
									<div class="content">
                                        <p>Cloudify warehouse didirikan pada tanggal 21 Juli 2021 yang sudah
                                            memiliki cabang di Daehak-ro, Gunsan, Jeollabuk-do, Korea Selatan dan
                                            di Kp. Jati Parung, Bogor, Indonesia. </p><br>
										<p>Cloudify warehouse merupakan salah satu warehouse yang jangkauan operasionalnya 
                                            hanya sekitar Korea Selatan – Indonesia. Menawarkan jasa warehouse 
                                            dengan dua pilihan yaitu sharing dan direct. Cloudify warehouse saat ini 
                                            bekerjasama baik dengan beberapa pihak terkait seperti pihak Bea Cukai Indonesia dan Pos
                                            Indonesia.
                                        </p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end featured section -->

	<!-- team section -->
	<div class="mb-150 mt-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">
						<h3>Paket <span class="orange-text">Layanan</span></h3>
						<p>Jenis paket layanan yang tersedia dalam warehouse kami</p>
					</div>
				</div>
			</div>
			<table class="table table-bordered">
			<thead>
				<tr>
					<th scope="col" class="col-lg-3 text-center">Jenis Paket</th>
					<th scope="col" class="text-center">Keterangan</th>
				</tr>
			</thead>
			<tbody>
					<tr>
						<td>Sharing</td>
						<td>Barang dari Warehouse Korea dikirim terlebih dahulu ke warehouse Indonesia, kemudian
setelah barang di sortir akan dikirim ke masing-masing alamat member. Hitungan tarif kirim dan pajak menggunakan
tarif yang ditetapkan oleh warehouse. Seluruh tahapan pengiriman barang diurus oleh pihak warehouse, barang
member akan dijadikan dalam satu box dengan barang member lain, maka dari itu member warehouse
wajib mengikuti alur dan sepakat dengan ketentuan warehouse perihal update barang, jadwal pengiriman,
penetapan rate, dan sistem warehouse.</td>
					</tr>
					<tr>
						<td>Direct (Repack)</td>
						<td>Barang kiriman dengan paket Repack ini akan dibuka oleh pihak warehouse untuk
kemudian barang di dalamnya di repacking lalu dimasukkan ke box baru. Member juga dapat
mengirim paket lebih dari satu resi, yang nantinya akan di repack ke dalam satu box yang sama
sebelum akhirnya dikirim ke alamat tujuan.</td>
					</tr>
					<tr>
						<td>Direct (No Repack)</td>
						<td>Paket direct No Repack yang dikirim ke warehouse tidak dibuka sama sekali, melainkan warehouse hanya membantu
untuk melepas invoice asli, mencetak invoice baru, merekatkan box, membantu pengiriman ke
ekspedisi. Biasanya paket No Repack ini dipakai saat ada Web atau Seller yang tidak menyediakan
pengiriman overseas atau memang member yang ingin membuat invoice baru.</td>
					</tr>
			</tbody>
			</table>
	</div>
	<!-- end team section -->

	<!-- team section -->
	<div class="mb-150 mt-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">
						<h3>Tarif <span class="orange-text">Warehouse</span></h3>
						<p>Tarif sharing yang berlaku dalam warehouse kami</p>
					</div>
				</div>
			</div>
			<table class="table table-bordered">
			<thead>
				<tr>
					<th scope="col" class="col-lg-6 text-center">Kategori</th>
					<th scope="col" class="text-center">Tarif</th>
				</tr>
			</thead>
			<tbody>
				<?php
				foreach ($alltarif as $no => $tarif) {
				?>
					<tr>
						<td><?= $tarif['keterangan']; ?></td>
						<td class="text-center">Rp<?= number_format($tarif['tarif'],0,',','.'); ?>/pcs</td>
				<?php
				}
				?>
			</tbody>
			</table>
	</div>
	<!-- end team section -->

	<!-- team section -->
	<div class="mb-150 mt-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">
						<h3>Alamat <span class="orange-text">Warehouse</span></h3>
						<p>Gunakan alamat di bawah ini untuk mengirimkan barang Anda ke warehouse kami di Korea</p>
					</div>
				</div>
			</div>
			<div class="row">
                <div class="col-lg-6 col-md-6 text-center">
					<div class="single-product-item">
						<h3><br>EMS</h3>
						<p class="product-price"><span><br>Nama Pemilik: Tika<br><br>
                        Daehak-ro, Gunsan No. 254<br>
                        Post Code 54126<br>
                        No Telp. 010-8629-5913<br>
                        </span>
                        </p>
						
					</div>
				</div>
                <div class="col-lg-6 col-md-6 text-center">
					<div class="single-product-item">
						<h3><br>Air Cargo</h3>
						<p class="product-price"><span><br>Nama Pemilik: Nurantika<br><br>
                        Daehak-ro, Gunsan No. 254<br>
                        Post Code 54126<br>
                        No Telp. 010-8629-5913<br>
                        </span>
                        </p>
						
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<!-- end team section -->

	
