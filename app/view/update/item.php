<div class="container" style="padding-top: 150px;">
<form action="<?= BASEURL; ?>/update/item/<?= $data['buku']['id_item']?>" method="post">
        <div class="form-group">
            <label for="id_item">Id Buku:</label>
            <input type="number" class="form-control" id="id_item" name="id_item" value="<?= $data['buku']['id_item']?>">
        </div>
        <div class="form-group">
            <label for="nama_buku">Nama buku:</label>
            <input type="text" class="form-control" id="nama_buku" name="nama_buku" value="<?= $data['buku']['nama_buku']?>">
        </div>
        <div class="form-group">
            <label for="status">Status:</label>
            <select class="form-control" id="status" name="status">
                <option value="Tersedia" <?= ($data['buku']['status'] == 'Tersedia') ? 'selected' : '' ?>>Tersedia</option>
                <option value="Tidak_tersedia" <?= ($data['buku']['status'] == 'Tidak_tersedia') ? 'selected' : '' ?>>Tidak tersedia</option>
            </select>
        </div>
        <div class="form-group">
            <label for="harga">Harga:</label>
            <input type="number" class="form-control" id="harga" name="harga" value="<?= $data['buku']['harga']?>">
        </div>
        <div class="form-group">
            <label for="kategori">Kategori:</label>
            <select class="form-control" id="kategori" name="kategori">
                <?php foreach ($data['kategori'] as $row): ?>
                    <option value="<?php echo $row['id_kategori'] ?>" <?= $row['id_kategori']? 'selected' : '' ?>>
                        <?php echo $row['nama_kategori'] ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <button class="btn btn-primary my-4" type="submit" name="submit">Submit</button>
    </form>
</div>