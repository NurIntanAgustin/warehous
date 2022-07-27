<!doctype html>
<html lang="en">

<head>
    <title>Cetak Data</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title><?= $title; ?></title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="<?= base_url() ?>assets/img/cw.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/responsive.css">

    <style>
        h1, h2 {
        text-align: center;
        }
    </style>
</head>

<body>
    <h1>Data Transaksi Konsumen</h1>
    <h2>Bulan <?= en_month_to_ina(date('n', strtotime($tagihan_list[0]['tanggal_tagihan']))); ?></h2>
    <?php if (count($tagihan_list) < 1): ?>
    	Tidak ada data yang dapat ditampilkan
    <?php else: ?>
    	<?php foreach ($tagihan_list as $key => $tagihan): ?>
			<div class="card mt-3" style="max-width: 800px; margin: auto;">
			    <div class="card-header">
			        <h5 class="card-title">No Resi : <?= $tagihan['resi']; ?></h5>
			    </div>
			    <div class="card-body">
				    <div class="row mb-2">
						<div class="col">
								Nama Barang 
						</div>
						<div class="col text-right">
				                <?= $tagihan['nama_barang']; ?>
						</div>
					</div>
				    <div class="row mb-2">
						<div class="col">
								Box 
						</div>
						<div class="col text-right">
				        <?= $tagihan['box']; ?> <?= $tagihan['nama_pengiriman']; ?> - <?= $tagihan['nama_paket']; ?>
						</div>
					</div>
				    <div class="row mb-2">
						<div class="col">
								Tarif Kirim dan Pajak
						</div>
						<div class="col text-right">
							Rp <?= number_format($tagihan['tarif'] ?: 0, 0,',','.'); ?>/gr
						</div>
					</div>
				    <div class="row mb-2">
						<div class="col">
								Fee Warehouse 
						</div>
						<div class="col text-right">
							Rp <?= number_format($tagihan['fee'] ?: 0, 0,',','.'); ?>
						</div>
					</div>
				    <div class="row mb-2">
						<div class="col">
								Berat Barang 
						</div>
						<div class="col text-right">
				                <?= $tagihan['berat']; ?> gr
						</div>
					</div>
				    <div class="row mb-2">
						<div class="col">
								Jumlah Yang Harus Dibayar 
						</div>
						<div class="col text-right">
				            Rp <?= number_format($tagihan['jumlah'] ?: 0, 0,',','.'); ?>
						</div>
					</div>
				    <div class="row mb-2">
						<div class="col">
								Status Pembayaran 
						</div>
						<div class="col text-right">
						<?= $tagihan['status_tf']; ?>
						</div>
					</div>
				    <div class="row mb-2">
						<div class="col">
								Link Shopee 
						</div>
						<div class="col text-right">
				            <a href="<?= $tagihan['link']; ?>"><?= $tagihan['link']; ?></a>
						</div>
					</div>
					<div class="row mb-2">
						<div class="col">
							Metode Pembayaran
						</div>
						<div class="col text-right">
				            <?php foreach ($metode_pembayaran_list as $list): ?>
				            	<?= "{$list['metode_pembayaran']} {$list['no_rek']} {$list['pemilik']}" ?>
				            	<br>
				            <?php endforeach ?>
						</div>
					</div>
				    <div class="row mb-2">
						<div class="col">
							Bukti Transfer
						</div>
						<div class="col text-right">
							<?php if ($tagihan['bukti_tf']): ?>
								<img width="70%" src="<?= base_url('assets/img/activity/bukti_transfer_konsumen/'.$tagihan['bukti_tf']) ?>">
								<br><br>
							<?php endif ?>
						</div>
					</div>
				</div>
			</div>    	
	    <?php endforeach ?>
	    <script>
	        window.print();
	    </script>
    <?php endif ?>
</body>

</html>