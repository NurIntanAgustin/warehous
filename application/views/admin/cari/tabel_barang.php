<table class="table mt-5">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Pemilik</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Resi</th>
            <th scope="col">Tanggal Kirim</th>
            <th scope="col">Paket</th>
            <th scope="col">Ekspedisi</th>
        </tr>
    </thead>
    <tbody>
        <?php if (count($list) < 1): ?>
            <tr>
                <td colspan="10" style="text-align: center">Data tidak ditemukan</td>
            </tr>
        <?php else: ?>
            <?php foreach ($list as $no => $resi): ?>
                <tr>
                    <th scope="row"><?= $no + 1 ?></th>
                    <td value="<?= $resi['user_id']; ?>"><?= $resi['nama']; ?></td>
                    <td><?= $resi['nama_barang']; ?></td>
                    <td><?= $resi['jumlah_barang']; ?></td>
                    <td><?= $resi['resi']; ?></td>
                    <td><?= $resi['tgl_kirim']; ?></td>
                    <td value="<?= $resi['paket_id']; ?>"><?= $resi['nama_paket']; ?></td>
                    <td value="<?= $resi['pengiriman_id']; ?>"><?= $resi['nama_pengiriman']; ?></td>
                </tr>
            <?php endforeach ?>
        <?php endif ?>
    </tbody>
</table>