<!doctype html>
<html lang="en">

<head>
    <title>Cetak Data</title>
    <style>
        h1 {
        text-align: center;
        }
    </style>
</head>

<body>
    <h1>Data Transaksi Konsumen</h1>
    <div class="card" style="max-width: 800px;margin: auto;">
                <div class="card-header">
                    <h5 class="card-title">No Resi : <?= $tagihan['resi']; ?></h5>
                </div>
                <div class="card-body">
                <div class="container">
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
							Rp<?= number_format($tagihan['tarif'],2,',','.'); ?>/gr
						</div>
					</div>
                    <div class="row mb-2">
						<div class="col">
								Fee Warehouse 
						</div>
						<div class="col text-right">
							Rp<?= number_format($tagihan['fee'],2,',','.'); ?>
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
                            Rp<?= number_format($tagihan['jumlah'],2,',','.'); ?>
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
								Bukti Transfer
						</div>
						<div class="col text-right">
                        <input type="file" class="form-control" id="barang_tf" name="bukti_tf" required>
                        <button class="btn btn-dark mt-2" type="submit">Upload</button>
						</div>
					</div>
                </div>
            </div>
    <script>
        window.print();
    </script>
</body>

</html>