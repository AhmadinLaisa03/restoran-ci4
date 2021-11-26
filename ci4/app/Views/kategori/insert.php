<?= $this->extend('template/admin.php') ?>

<?= $this->section('content') ?>

<?php
    echo session()->getFlashdata('infoeror');
?>

<h1> INSERT DATA </h1>

<form action="<?= base_url() ?>/Admin/kategori/insert" method="post">
    Kategori : <input type="text" name="kategori" required>
    <br>
    <br>
    Keterangan : <input type="text" name="keterangan" required>
    <br>
    <br>
    <input type="submit" name="simpan" value="SIMPAN">
</form>

<?= $this->endSection() ?>