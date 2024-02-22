<div class="container" style="padding-top: 150px">
    <h2>LIST TRANSAKSI</h2>
    <?php
    if ($_SESSION['master'] || $_SESSION['admin']) {
        ?>
        <div class="my-3">
            <a href="<?= BASEURL; ?>/Insert/peminjaman" class="btn btn-primary">+ INPUT</a>
        </div>
        <?php
    }
    if($_SESSION['master']){
        ?>
        <div class="my-3">
            <a href="<?= BASEURL; ?>/Dashboard/pdf" class="btn btn-secondary">PDF</a>
        </div>
        <?php
    }
    ?>
    <table class="table">
        <tr>
            <th>No</th>
            <th>ID Transaksi</th>
            <th>ID Buku</th>
            <th>tanggal</th>
            <th>Banyak</th>
            <th>Harga</th>
            <th>Total</th>
            <th>Action</th>
        </tr>
        <?php
        if (!isset($data['tabel']['id_transaksi'])) {
            $no = 1;
            foreach ($data['tabel'] as $row) {
                echo "<tr>
            <td>$no</td>
            <td>" . $row['id_transaksi'] . "</td>
            <td>" . $row['id_item'] . "</td>
            <td>" . $row['Tanggal'] . "</td>
            <td>" . $row['jumlah'] . "</td>
            <td>" . $row['harga'] . "</td>
            <td>" .$row['jumlah'] * $row['harga'] ." </td>
            <td>
                <a class='btn btn-primary' href='/UAS/public/Update/peminjaman/". $row['id_transaksi'] ."'>Edit</a>
                <a class='btn btn-danger' href='/UAS/public/delete/peminjaman/". $row['id_transaksi'] ."'>hapus</a>
            </td>
        </tr>";
                $no++;
            }
        } else {
            echo "<tr>
            <td colspan='7'>Tidak ada data mahasiswa.</td>
        </tr>";
        }
        ?>
    </table>
</div>