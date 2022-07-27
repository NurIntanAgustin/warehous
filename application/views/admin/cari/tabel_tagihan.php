<table class="table mt-3">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Resi</th>
            <th scope="col">Berat</th>
            <th scope="col">Tarif Kirim<br>dan Pajak</th>
            <th scope="col">Tarif<br>Warehouse</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Bukti</th>
            <th scope="col">Status</th>
            <th scope="col">Link</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php if (count($list) < 1): ?>
            <tr>
                <td colspan="10" style="text-align: center">Data tidak ditemukan</td>
            </tr>
        <?php else: ?>
            <?php foreach ($list as $no => $tagihan): ?>
                <tr>
                    <td scope="row"><?= $no + 1 ?></td>
                    <td><?= $tagihan['resi']; ?></td>
                    <td><?= $tagihan['berat']; ?></td>
                    <td>Rp <?= number_format($tagihan['tarif'] ?: 0, 0, ',', '.') ?></td>
                    <td>Rp <?= number_format($tagihan['fee'] ?: 0, 0, ',', '.') ?></td>
                    <td>Rp <?= number_format($tagihan['jumlah'] ?: 0, 0, ',', '.') ?></td>
                    <td><a href="#" data-toggle="modal" data-target="#previewImageModal"><?= $tagihan['bukti_tf']; ?></a></td>
                    <td><?= $tagihan['status_tf']; ?></td>
                    <td><?= $tagihan['link']; ?></td>
                    <td>
                        <a href="<?= base_url('admin/tagihan_edit/' . $tagihan['tagihan_id']) ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="<?= base_url('admin/tagihan_hapus/' . $tagihan['tagihan_id']) ?>" class="btn btn-danger btn-sm">Hapus</a>
                        <a href="<?= base_url('admin/tagihan_print/' . $tagihan['tagihan_id']) ?>" class="btn btn-success btn-sm">Print</a>
                    </td>
                </tr>
            <?php endforeach ?>
        <?php endif ?>
    </tbody>
</table>