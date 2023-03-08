<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>



<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Belanja Online</a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <form method="POST" action="form_belanja.php">
                    <div class="form-group row">
                        <label for="customer" class="col-4 col-form-label">Customer</label>
                        <div class="col-8">
                            <input id="customer" name="customer" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Pilih Produk</label>
                        <div class="col-8">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV">
                                <label for="produk_0" class="custom-control-label">TV</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas">
                                <label for="produk_1" class="custom-control-label">Kulkas</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin Cuci">
                                <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jumla" class="col-4 col-form-label">Jumlah</label>
                        <div class="col-8">
                            <input id="jumla" name="jumla" type="number" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-4">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active">Home</a>
                    <div class="list-group-item">
                        List header
                    </div>
                    <div class="list-group-item">
                        <h4 class="list-group-item-heading">
                            List group item heading
                        </h4>
                        <p class="list-group-item-text">
                            ...
                        </p>
                    </div>
                    <div class="list-group-item justify-content-between">
                        Help <span class="badge badge-secondary badge-pill">14</span>
                    </div> <a href="#" class="list-group-item list-group-item-action active justify-content-between">Home <span class="badge badge-light badge-pill">14</span></a>
                </div>
            </div>

        </div>
        <div class="row">
            <?php
            $customer = $_POST['customer'];
            $produk = $_POST['produk'];
            $jumla = $_POST['jumla'];
            $harga;

            if ($produk >= 'TV') {
                $harga = 4200000;
            } elseif ($produk >= 'Kulkas') {
                $harga = 3500000;
            } elseif ($produk >= 'Mesin Cuci') {
                $harga = 3500000;
            } else {
                $harga = 0;
            }
            $total = $jumla * $harga;
            $hasil = "Rp " . number_format($total, 2, ',', '.');
            ?>
            <div class="col-md-4">
                <table>
                    <tr>
                        <td>Nama Customer</td>
                        <td>: <?= $customer ?></td>
                    </tr>
                    <tr>
                        <td>Produk</td>
                        <td>: <?= $produk ?></td>
                    </tr>
                    <tr>
                        <td>Jumlah</td>
                        <td>: <?= $jumla ?></td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td>: <?= $hasil ?></td>
                    </tr>

                </table>
            </div>
        </div>
    </div>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
</body>

</html>