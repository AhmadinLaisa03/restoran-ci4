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
    <h3> INSERT DATA </h3>
</div>

<div class="col-8">
    <form action="<?= base_url('/Admin/kategori/insert') ?>" method="post">
        <div class="form-group mb-3">
            <label for="inputkategori">Kategori </label>
            <input class="form-control" type="text" name="kategori" id="inputkategori" required>
        </div>
        <div>
            <label for="inputketerangan">Keterangan </label>
            <input class="form-control" type="text" name="keterangan" id="inputketerangan" required>
        </div>
        <div class="mt-3">
            <input class="btn btn-success" type="submit" name="simpan" value="SIMPAN">
        </div>
    </form>
</div>

<?= $this->endSection() ?>