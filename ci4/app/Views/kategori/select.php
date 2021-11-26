<?= $this->extend('template/admin.php') ?>

<?= $this->section('content') ?>


<h1><?= $judul ?></h1>
<a class="btn btn-success " href="<?= base_url('/Admin/kategori/create') ?>" role="button">Tambah Kategori Baru</a>

<table class="table ">

    <tr>
        <th>No</th>
        <th>Kategori</th>
        <th>Keterangan</th>
        <th>Hapus</th>
        <th>Update</th>
    </tr>

    <?php foreach ($kategori as $key => $value) : ?>
        <?php $no++; ?>
        <tr>
            <td><?= $no ?></td>
            <td><?= $value['kategori'] ?></td>
            <td><?= $value['keterangan'] ?></td>
            <td><a class="text-success" href="<?= base_url() ?>/Admin/kategori/delete/<?= $value['idkategori'] ?>">Hapus</a></td>
            <td><a class="text-success" href="<?= base_url() ?>/Admin/kategori/find/<?= $value['idkategori'] ?>">Update</a></td>
        </tr>
    <?php endforeach; ?>

</table>

<?= $pager->links('grup1', 'paging') ?>

<?= $this->endSection() ?>