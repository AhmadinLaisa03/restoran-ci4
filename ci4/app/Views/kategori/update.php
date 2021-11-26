<?= $this->extend('template/admin.php') ?>

<?= $this->section('content') ?>

    <h1> UPDATE DATA </h1>

    <form action="<?= base_url() ?>/Admin/kategori/update" method="post">
        Kategori : <input type="text" name="kategori" value="<?= $kategori['kategori'] ?>" required>
        <br>
        <br>
        Keterangan : <input type="text" name="keterangan" value="<?= $kategori['keterangan'] ?>" required>
        <br>
        <br>
        <input type="hidden" name="idkategori" value="<?= $kategori['idkategori'] ?>" required>
        <input type="submit" name="simpan" value="SIMPAN">
    </form>

<?= $this->endSection() ?>