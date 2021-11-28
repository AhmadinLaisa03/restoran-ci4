<?= $this->extend('template/admin.php') ?>

<?= $this->section('content') ?>

<?php
if (isset($_GET['page_grup1'])) {
    $page = $_GET['page_grup1'];
    $jumlah = 3;
    $no = ($jumlah * $page) - $jumlah;
} else {
    $no = 0;
}

?>

<div class="row">
    <div class="col">
        <h3><?= $judul ?></h3>
    </div>
</div>

<div class="row">
    <div class="col">
        <table class="table mt-2">

            <tr>
                <th>No</th>
                <th>Pelanggan</th>
                <th>Alamat</th>
                <th>Telp</th>
                <th>Email</th>
                <th>Aksi</th>
                <th>Status</th>
            </tr>

            <?php foreach ($pelanggan as $key => $value) : ?>
                <?php $no++; ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $value['pelanggan'] ?></td>
                    <td><?= $value['alamat'] ?></td>
                    <td><?= $value['telp'] ?></td>
                    <td><?= $value['email'] ?></td>
                    <td>
                        <a class="text-success" href="<?= base_url() ?>/Admin/pelanggan/delete/<?= $value['idpelanggan'] ?>"><img src="<?= base_url('/icon/trash.svg') ?>" alt=""></a>
                    </td>
                    <?php
                    if ($value['aktif'] == 1) {
                        $aktif = 'Aktif';
                    } else {
                        $aktif = 'Non Aktif';
                    }

                    ?>
                    <td><a href="<?= base_url() ?>/Admin/pelanggan/update/<?= $value['idpelanggan'] ?>/<?= $value['aktif'] ?>"><?= $aktif ?></a></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>
<div class="row">
    <div class="col">
        <?= $pager->links('grup1', 'paging') ?>
    </div>
</div>

<?= $this->endSection() ?>