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

    <div class="me-5 col-4">
        <a class="btn btn-success " href="<?= base_url('/Admin/kategori/create') ?>" role="button">Tambah Kategori Baru</a>
    </div>
</div>

<div class="row">
    <div class="col">
        <table class="table mt-2">

            <tr>
                <th>No</th>
                <th>Kategori</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>

            <?php foreach ($kategori as $key => $value) : ?>
                <?php $no++; ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $value['kategori'] ?></td>
                    <td><?= $value['keterangan'] ?></td>
                    <td>
                        <a class="text-success" href="<?= base_url() ?>/Admin/kategori/delete/<?= $value['idkategori'] ?>"><img src="<?= base_url('/icon/trash.svg') ?>" alt="">|</a>
                        <a class="text-success" href="<?= base_url() ?>/Admin/kategori/find/<?= $value['idkategori'] ?>"><img src="<?= base_url('/icon/pencil.svg') ?>" alt=""></a>
                    </td>
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