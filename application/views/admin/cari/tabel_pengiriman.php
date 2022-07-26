<table class="table mt-3">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Resi Barang</th>
            <th scope="col">Box</th>
            <th scope="col">Ekspedisi</th>
            <th scope="col">Resi Pengiriman</th>
            <th scope="col">Status</th>
            <th scope="col">Warehouse Korea</th>
            <th scope="col">Warehouse Indonesia</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
    	<?php if (count($list) < 1): ?>
            <tr>
                <td colspan="10" style="text-align: center">Data tidak ditemukan</td>
            </tr>
        <?php else: ?>
            <?php foreach ($list as $no => $logistik): ?>
                <tr>
	                <td scope="row"><?= $no + 1 ?></td>
	                <td value="<?= $logistik['resi_id']; ?>"><?= $logistik['resi']; ?></td>
	                <td><?= $logistik['box']; ?></td>
	                <td value="<?= $logistik['resi_id']; ?>"><?= $logistik['nama_pengiriman']; ?></td>
	                <td><?= $logistik['resi_pengiriman']; ?></td>
	                <td><?= $logistik['status']; ?></td>
	                <td><?= $logistik['gambar_arrived_kr']; ?></td>
	                <td><?= $logistik['gambar_arrived_ina']; ?></td>
	                <td>
	                    <a href="<?= base_url('admin/logistik_edit/' . $logistik['log_id']) ?>" class="btn btn-warning btn-sm">Edit</a>
	                    <a href="<?= base_url('admin/logistik_hapus/' . $logistik['log_id']) ?>" class="btn btn-danger btn-sm">Hapus</a>
	                </td>
	            </tr>
            <?php endforeach ?>
        <?php endif ?>
    </tbody>
</table>