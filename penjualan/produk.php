<?php
$models = new Produk();
$data_produk = $models->tampil();
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Produk</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?hal=home">Home</a></li>
              <li class="breadcrumb-item active">Produk</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    
<section class="content">
<div class="row">
    <div class="col-12">
        <table class="table table-striped table-responsive">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama Produk</th>
                    <th>Harga Beli</th>
                    <th>Harga Jual</th>
                    <th>Stok</th>
                    <th>Min Stok</th>
                    <th>Jenis Produk</th>
                </tr>
            </thead>
            <tbody>
                <!-- cetak data array produk -->
                <?php
                $no = 1;
                foreach ($data_produk as $value) {
                ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $value ['kode'] ?></td>
                    <td><?= $value ['nama'] ?></td>
                    <td><?= $value ['harga_beli'] ?></td>
                    <td><?= $value ['harga_jual'] ?></td>
                    <td><?= $value ['stok'] ?></td>
                    <td><?= $value ['min_stok'] ?></td>
                    <td><?= $value ['namajenisproduk'] ?></td>
                </tr>
                <?php
                $no++;
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
</section>
<!-- /.content -->
</div>