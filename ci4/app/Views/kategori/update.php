<?= $this->extend('template/admin.php') ?>

<?= $this->section('content') ?>

<!-- alert eror -->
<div class="col-7">
    <?php
    if (!empty(session()->getFlashdata('infoeror'))) {
        echo "<div class='alert alert-danger'>";
        echo session()->getFlashdata('infoeror');
        echo "</div>";
    }

    ?>
</div>

<div class="col">
    <h3> UPDATE DATA </h3>
</div>

<div class="col-8">
    <form action="<?= base_url() ?>/Admin/kategori/update" method="post">
        <div class="form-group mb-3">
            <label for="inputkategori">Kategori </label>
            <input class="form-control" type="text" name="kategori" value="<?= $kategori['kategori'] ?>" id="inputkategori" required>

            <label for="inputketerangan">Keterangan </label>
            <input class="form-control" type="text" name="keterangan" value="<?= $kategori['keterangan'] ?>" id="inputketerangan" required>
        </div>

        <input type="hidden" name="idkategori" value="<?= $kategori['idkategori'] ?>" required>

        <input class="btn btn-success" type="submit" name="simpan" value="SIMPAN">
    </form>
</div>

<?= $this->endSection() ?>