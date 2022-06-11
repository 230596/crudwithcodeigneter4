<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Ubah Produk</title>
  </head>
  <body>
    <div class="container mt-5">
        <div class="row justify-content-md-center">
            <div class="col-5 border border-secondary p-5">
                <h2>Ubah Produk</h2>
                <form action="/product/update" method="post">
                <input type="hidden" name="id" value="<?= $product->id;?>">
                    <div class="mb-3">
                        <label for="InputForName" class="form-label">Nama Barang</label>
                        <input type="text" name="name" class="form-control" id="InputForName" value="<?= $product->name;?>">
                    </div>
                    <div class="mb-3">
                        <label for="InputForPrice" class="form-label">Harga Barang</label>
                        <input type="text" name="price" class="form-control" id="InputForPrice" value="<?= $product->price;?>">
                    </div>
                    <div class="mb-3">
                        <label for="InputForQuantity" class="form-label">Jumlah Barang</label>
                        <input type="text" name="quantity" class="form-control" id="InputForQuantity" value="<?= $product->quantity;?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
              
        </div>
    </div>
  </body>
</html>