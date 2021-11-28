<div class="form-group">
    <select class="form-control" onchange="this.form.submit()" name="idkategori" id="idkategori">
        <option class="text-center" value="1">Cari...</option>
        <?php foreach ($kategori as $key => $value) : ?>
            <option class="text-center" value="<?= $value['idkategori'] ?>"><?= $value['kategori'] ?></option>
        <?php endforeach; ?>
    </select>
</div>