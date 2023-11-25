<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <?php if(validation_errors()){?>
            <div class="alert alert-danger" role="alert">
                <?= validation_errors();?>
            </div>
            <?php }?><center>
            <h1>Daftar Produk pada Toko Klontong</h1>
            <table border="1" style="width: 50%;text-align:center;">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Kode Produk</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Harga Produk</th>
                        <th scope="col">Satuan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($produk as $p) { ?>
                    <tr>
                        <th scope="row"><?= $no++; ?></th>
                        <td><?= $p['kode_produk']; ?></td>
                        <td><?= $p['nama_produk']; ?></td>
                        <td><?= $p['harga']; ?></td>
                        <td><?= $p['satuan']; ?></td>
                        <td>
                            <a href="<?= base_url('klontong/hapusProduk/').$p['kode_produk'];?>" onclick="return confirm('Apakah yakin ingin menghapus produk dengan kode <?= $p['kode_produk'];?> ?');"></i> Hapus</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table></center>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->