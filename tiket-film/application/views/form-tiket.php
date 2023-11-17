<html>
<head>
    <title>Form Input Data Tiket</title>
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/style-form.css">
</head>
<body>
    
    <center>
        <form action="<?= base_url('tiket/cetaktiket'); ?>" method="post">
            <table>
                <tr>
                    <th colspan="3">
                        <span style="font-size: 24px;">Form Input Data Tiket</span>
                    </th>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>Kode Tiket</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="kode_tiket" id="kode_tiket">
                    </td>
                </tr>
                <tr>
                    <th>Studio</th>
                    <td>:</td>
                    <td>
                        <select name="studio" id="studio">
                            <option value="">Pilih Studio</option>
                            <option value="Studio 1">Studio 1</option>
                            <option value="Studio 2">Studio 2</option>
                            <option value="Studio 3">Studio 3</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>Genre</th>
                    <td>:</td>
                    <td>
                        <select name="genre" id="genre">
                            <option value="">Pilih Genre</option>
                            <option value="Drama Romance">Drama Romance</option>
                            <option value="Action">Action</option>
                            <option value="Thriller/Horror">Thriller/Horror</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>Harga</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="harga" id="harga">
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" value="Tambah Tiket">
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <a href="<?= base_url('tiket/datatiket'); ?>">Lihat Data Tiket Film</a>
                    </td>
                </tr>
            </table>
        </form>
    </center>

</body>
</html>