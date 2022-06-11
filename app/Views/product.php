<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Tabel Daftar Barang</title>
  </head>
  <body>
    <div class="container mt-5">
        <a href="/product/add_new" class="btn btn-primary mb-3">Add New</a>
        <div class="row justify-content-md-center">
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Harga (IDR)</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Total (IDR)</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($product as $p):?>
                    <tr>
                        <th scope="row"><?= $p['id'];?></th>
                        <td><?= $p['name'];?></td>
                        <td><?= $p['price'];?></td>
                        <td><?= $p['quantity'];?></td>
                        <td><?= $p['price']*$p['quantity'];?></td>
                        <td>
                            <a href="/product/edit/<?= $p['id'];?>" class="btn btn-warning">Edit</a>
                            <a href="/product/<?= $p['id'];?>" class="btn btn-danger">Delete</a>
                        </td>
                     </tr>
                <?php endforeach;?>
            </tbody>
            </table>
              
        </div>
    </div>
  </body>
</html>