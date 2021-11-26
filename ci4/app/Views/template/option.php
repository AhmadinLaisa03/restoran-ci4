<select class="mb-3 w-25" name="kategori" id="kategori">
    <?php foreach ($kategori as $key => $value) : ?>
        <option class="text-center" value="<?= $value['kategori'] ?>"><?= $value['kategori'] ?></option>
    <?php endforeach; ?>
</select>