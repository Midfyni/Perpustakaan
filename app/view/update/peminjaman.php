<div class="container" style="padding-top: 150px;">
    <form action="<?= BASEURL; ?>/update/peminjaman/<?= $data['single']['id_transaksi'] ?>" method="post">
        <div class="form-group">
            <label for="id_item">Id buku:</label>
            <select class="form-control" id="id_item" name="id_item">
                <?php foreach ($data['buku'] as $row): ?>
                    <option value="<?php echo $row['id_item'] ?>" <?php echo ($row['id_item'] == $data['single']['id_item']) ? 'selected' : '' ?>>
                        <?php echo $row['nama_buku'] ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="tanggal">Tanggal:</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal"
                value="<?= $data['single']['Tanggal'] ?>">
        </div>
        <div class="form-group">
            <label for="jumlah">Jumlah:</label>
            <input type="number" class="form-control" id="jumlah" name="jumlah"
                value="<?= $data['single']['jumlah'] ?>">
        </div>
        <button class="btn btn-primary" type="submit" name="submit">Submit</button>
    </form>
</div>