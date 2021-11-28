<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('/bootstrap/css/bootstrap.css') ?>">
    <title>Admin Page | Restoran ESEMAK</title>
</head>

<body>
    <div class="container">
        <div class="row mt-2">
            <nav class="navbar navbar-light bg-light">
                <a class="navbar-brand" href="<?= base_url('/Admin') ?>"><h3 class="display-6">Admin Page</h3></a>
            </nav>
        </div>
        <div class="row mt-3">
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a class="text-success" href="<?= base_url('/Admin/kategori') ?>">Kategori</a></li>
                        <li class="list-group-item"><a class="text-success" href="<?= base_url('/Admin/menu') ?>">Menu</a></li>
                        <li class="list-group-item"><a class="text-success" href="<?= base_url('/Admin/pelanggan') ?>">Pelanggan</a></li>
                        <li class="list-group-item"><a class="text-success" href="<?= base_url('/Admin/order') ?>">Order</a></li>
                        <li class="list-group-item"><a class="text-success" href="<?= base_url('/Admin/orderdetail') ?>">Order Detail</a></li>
                        <li class="list-group-item"><a class="text-success" href="<?= base_url('/Admin/user') ?>">User</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-8 px-5">
                <?= $this->renderSection('content') ?>
            </div>
        </div>
    </div>

</body>

</html>