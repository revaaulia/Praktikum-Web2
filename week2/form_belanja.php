<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Form Belanja Online - Reva</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row p-2">
            <div class="col-md-8">
                <h3>Belanja Online</h3>
                <hr>
                <form role="form" method="POST" action="form_belanja.php">
                    <div class="form-group row">
                        <label for="customer" class="col-2 text-right col-form-label font-weight-bold">Customer</label>
                        <div class="col-5">
                            <input id="customer" name="customer" placeholder="Nama Customer" type="text"
                                class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 text-right col-form-label font-weight-bold">Pilih Produk</label>
                        <div class="col-6">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV"
                                    required="required">
                                <label for="produk_0" class="custom-control-label">TV</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_1" type="radio" class="custom-control-input"
                                    value="Kulkas" required="required">
                                <label for="produk_1" class="custom-control-label">Kulkas</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_2" type="radio" class="custom-control-input"
                                    value="Mesin Cuci" required="required">
                                <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jumlah" class="col-2 text-right col-form-label font-weight-bold">Jumlah</label>
                        <div class="col-2">
                            <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control"
                                required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-1 col-4">
                            <input type="submit" value="Kirim" name="kirim" class="btn btn-success">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-4">
                <div class="list-group">
                    <div class="list-group-item list-group-item-action active font-weight-bold">Daftar Harga</div>
                    <div class="list-group-item">TV : 4.200.000</div>
                    <div class="list-group-item">Kulkas : 3.100.000</div>
                    <div class="list-group-item">Mesin Cuci : 3.800.000</div>
                    <div class="list-group-item list-group-item-action active justify-content-between font-weight-bold">
                        Harga Dapat Berubah Setiap Saat</div>
                </div>
            </div>
        </div>
        <hr>
        <?php 
        if (isset($_POST['kirim'])) {
        $customer = $_POST['customer'];
        $produk = $_POST['produk'];
        $jumlah = $_POST['jumlah'];
        if ($produk == "TV"){
            $total = $jumlah * 4200000;
            $total_belanja = number_format($total,0,",",".");
        } elseif ($produk == "Kulkas") {
            $total = $jumlah * 3100000;
            $total_belanja = number_format($total,0,",",".");
        } elseif ($produk == "Mesin Cuci") {
            $total = $jumlah * 3800000;
            $total_belanja = number_format($total,0,",",".");

        }

        echo "<p>Nama Customer : $customer";
        echo "<p>Produk Pilihan : $produk";
        echo "<p>Jumlah Pembelian : $jumlah";
        echo "<p>Total Belanja : Rp $total_belanja";
        } 
    ?>
    </div>
</body>
</html>