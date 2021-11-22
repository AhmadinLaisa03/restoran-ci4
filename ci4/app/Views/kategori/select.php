<?= $this->extend('template/admin.php') ?>

<?= $this->section('content') ?>

<h1><?= $judul ?></h1>

    <?php foreach ($kategori as $key => $value) : ?>
    <p><?= $value['kategori'] ?></p>
    <?php endforeach; ?>
    
    <h2><?= $kategori[2]['kategori'] ?></h2>
    
<?= $this->endSection() ?>