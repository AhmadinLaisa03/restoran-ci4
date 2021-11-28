<?= $this->extend('template/admin.php') ?>

<?= $this->section('content') ?>

<!-- alert eror -->
<div class="col-7">
    <?php
    if (!empty(session()->getFlashdata('infoeror'))) {
        echo "<div class='alert alert-danger'>";
        $error = session()->getFlashdata('infoeror');
        foreach ($error as $key => $value) {
            echo $key . '=>' . $value;
            echo '</br>';
        }
        echo "</div>";
    }
    ?>
</div>

<div class="col">
    <h3> INSERT DATA </h3>
</div>

<div class="col-8">
    <form action="<?= base_url('/Admin/menu/insert') ?>" method="post" enctype="multipart/form-data">
        <p class="text-muted mb-1">pilih kategori di bawah ini</p>
        <div class="form-group" style="width: 130px;">
            <select class="form-control" name="idkategori" id="idkategori">
                <?php foreach ($kategori as $key => $value) : ?>
                    <option class="text-center" value="<?= $value['idkategori'] ?>"><?= $value['kategori'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group mb-3">
            <label for="inputmenu">Menu</label>
            <input class="form-control" type="text" name="menu" id="inputmenu" required>
        </div>
        <div class="form-group">
            <label for="inputharga">Harga </label>
            <input class="form-control" type="text" name="harga" id="inputharga" required>
        </div>
        <div class="form-group mt-3">
            <label for="">Gambar : </label>
            <input type="file" name="gambar" required>
        </div>
        <div class="mt-3">
            <input class="btn btn-success" type="submit" name="simpan" value="Tambah">
        </div>
    </form>
</div>

<?= $this->endSection() ?>