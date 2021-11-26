<?= $this->extend('template/admin.php') ?>

<?= $this->section('content') ?>

<h1> UPLOAD IMAGE </h1>

<div class="row">
    <?= view_cell('\App\Controllers\Admin\Menu::option') ?>
</div>

<div class="row">
    <form action="<?= base_url('/Admin/Menu/insert') ?>" method="post" enctype="multipart/form-data">
        Gambar : <input type="file" name="gambar" required>
        <br>
        <br>
        <input type="submit" name="simpan" value="SIMPAN">
    </form>
</div>


<?= $this->endSection() ?>