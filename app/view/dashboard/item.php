<div class="container" style="padding-top: 150px">
    <h2>TABEL ITEM</h2>
    <?php
    if ($_SESSION['master'] || $_SESSION['admin']) {
        ?>
        <div class="my-3">
            <a href="<?= BASEURL; ?>/Insert/item" class="btn btn-primary">+ INPUT</a>
        </div>
        <?php
    }
    ?>
    <?php
    if ($_SESSION['master'] || $_SESSION['admin']) {
        ?>
        <table class="table">
            <tr>
                <th>No</th>
                <th>ID Buku</th>
                <th>Nama buku</th>
                <th>Harga</th>
                <th>Status</th>
                <th>Kategori</th>
                <th>Action</th>
            </tr>
            <?php
            if ($data['tabel'] > 0) {
                $no = 1;
                foreach ($data['tabel'] as $row) {
                    echo "<tr>
                    <td>$no</td>
                    <td>" . $row['id_item'] . "</td>
                    <td>" . $row['nama_buku'] . "</td>
                    <td>" . $row['harga'] . "</td>
                    <td>" . $row['status'] . "</td>
                    <td>" . $row['nama_kategori'] . "</td>
                    <td>
                        <a class='btn btn-primary' href='/UAS/public/Update/item/" . $row['id_item'] . "'>Edit</a>
                        <a class='btn btn-danger' href='/UAS/public/Delete/item/" . $row['id_item'] . "'>hapus</a>
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
        <?php
    } else {
        ?>
        <table class="table">
            <tr>
                <th>No</th>
                <th>ID Buku</th>
                <th>Nama buku</th>
                <th>Harga</th>
                <th>Status</th>
                <th>Kategori</th>
            </tr>
            <?php
            if ($data['tabel'] > 0) {
                $no = 1;
                foreach ($data['tabel'] as $row) {
                    echo "<tr>
                    <td>$no</td>
                    <td>" . $row['id_item'] . "</td>
                    <td>" . $row['nama_buku'] . "</td>
                    <td>" . $row['harga'] . "</td>
                    <td>" . $row['status'] . "</td>
                    <td>" . $row['nama_kategori'] . "</td>
                    ";
                    $no++;
                }
            } else {
                echo "<tr>
            <td colspan='7'>Tidak ada data mahasiswa.</td>
        </tr>";
            }
    }
    ?>
    </table>
</div>