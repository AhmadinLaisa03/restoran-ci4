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
        <a class="btn btn-success " href="<?= base_url('/Admin/menu/create') ?>" role="button">Tambah menu Baru</a>
    </div>
</div>

<div class="row mt-2">
    <div class="col-4">
        <form action="<?= base_url('/Admin/menu/read') ?>" method="get">
            <p class="text-muted mb-1">pilih kategori di bawah ini</p>
            <?= view_cell('\App\Controllers\Admin\Menu::option') ?>
        </form>
    </div>
</div>

<div class="row">
    <div class="col">
        <table class="table mt-2">

            <tr>
                <th>No</th>
                <th>menu</th>
                <th>gambar</th>
                <th>harga</th>
                <th>Aksi</th>
            </tr>

            <?php foreach ($menu as $key => $value) : ?>
                <?php $no++; ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $value['menu'] ?></td>
                    <td><img src="<?= base_url('/upload/' . $value['gambar'] . '') ?>" alt="" style="width: 70px;"></td>
                    <td>Rp. <?= number_format($value['harga']) ?></td>
                    <td>
                        <a class="text-success" href="<?= base_url() ?>/Admin/menu/delete/<?= $value['idmenu'] ?>"><img src="<?= base_url('/icon/trash.svg') ?>" alt="">|</a>
                        <a class="text-success" href="<?= base_url() ?>/Admin/menu/find/<?= $value['idmenu'] ?>"><img src="<?= base_url('/icon/pencil.svg') ?>" alt=""></a>
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