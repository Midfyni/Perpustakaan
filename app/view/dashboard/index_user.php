<div class="container" style="padding-top: 150px">
    <h2>LIST TABEL USER</h2>
    <table class="table">
        <tr>
            <th>No</th>
            <th>Nama buku</th>
            <th>waktu peminjaman</th>
            <th>tengat_peminjmana</th>
            <th>nama kategori</th>
        </tr>
        <?php
        if ($data['tabel'] > 0) {
            $no = 1;
            foreach ($data['tabel'] as $row) {
                echo "<tr>
            <td>$no</td>
            <td>" . $row['nama_buku'] . "</td>
            <td>" . $row['waktu_peminjaman'] . "</td>
            <td>" . $row['tengat_peminjaman'] . "</td>
            <td>" . $row['nama_kategori'] . "</td>
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