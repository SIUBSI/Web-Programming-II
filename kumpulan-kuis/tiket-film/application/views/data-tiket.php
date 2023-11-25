<html>
<head>
    <title>Tampil Data Tiket</title>
</head>
<body>

        <center>
            <h1>Data Tiket Film</h1>
            <table border="1" style="width: 50%;text-align:center;">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Kode Tiket</th>
                        <th scope="col">Studio</th>
                        <th scope="col">Genre</th>
                        <th scope="col">Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($tiket_film as $tf) { ?>
                    <tr>
                        <td scope="row"><?= $no++; ?></td>
                        <td><?= $tf['kode_tiket']; ?></td>
                        <td><?= $tf['studio']; ?></td>
                        <td><?= $tf['genre']; ?></td>
                        <td><?= $tf['harga']; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table></br>
            <a href="<?= base_url('tiket'); ?>">Kembali ke Form Input</a>
        </center>

</body>
</html>