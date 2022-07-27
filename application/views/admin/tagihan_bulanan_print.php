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

        @media print {
        	h1, h2 {
        		text-align: center;
        	}
        	.table td, .table th { padding: 0px; }
        }
    </style>
</head>

<body>
    <h1>Data Transaksi Konsumen</h1>
    <h2>Bulan <?= en_month_to_ina(date('n', strtotime($tagihan_list[0]['tanggal_tagihan']))); ?></h2>
    <?php if (count($tagihan_list) < 1): ?>
    	Tidak ada data yang dapat ditampilkan
    <?php else: ?>
    	<table class="table mt-3">
    		<thead>
    			<tr>
    				<th scope="col">No</th>
	    			<th scope="col">Resi</th>
	    			<th scope="col">Berat</th>
	    			<th scope="col">Tanggal Transaksi</th>
	    			<th scope="col">Tarif Kirim dan Pajak</th>
	    			<th scope="col">Tarif Warehouse</th>
	    			<th scope="col">Jumlah</th>
	    		</tr>
	    	</thead>
	    	<tbody>
		    	<?php $total_jumlah = 0; foreach ($tagihan_list as $no => $tagihan): ?>
					<tr>
		                <td scope="row"><?= $no + 1 ?></td>
		                <td><?= $tagihan['resi']; ?></td>
		                <td><?= $tagihan['berat']; ?></td>
		                <td><?= date('d-m-Y H:i', strtotime($tagihan['tanggal_tagihan'])); ?></td>
		                <td>Rp <?= number_format($tagihan['tarif'] ?: 0, 0, ',', '.') ?></td>
		                <td>Rp <?= number_format($tagihan['fee'] ?: 0, 0, ',', '.') ?></td>
		                <td>Rp <?= number_format($tagihan['jumlah'] ?: 0, 0, ',', '.') ?></td>
		            </tr>
			    <?php $total_jumlah += (int) $tagihan['jumlah']; endforeach ?>
			</tbody>
			<tfoot>
				<tr>
					<td colspan="6" style="text-align: right;"></td>
					<td>Rp <?= number_format($total_jumlah ?: 0, 0, ',', '.') ?> </td>
				</tr>
			</tfoot>
	    </table>

	    <script>
	        window.print();
	    </script>
    <?php endif ?>
</body>

</html>