<div class="container" style="padding-top: 150px;">
<form action="<?= BASEURL; ?>/insert/item" method="post">
        <div class="form-group">
            <label for="id_item">Id item:</label>
            <input type="number" class="form-control" id="id_item" name="id_item">
        </div>
        <div class="form-group">
            <label for="nama_buku">Nama buku:</label>
            <input type="text" class="form-control" id="nama_buku" name="nama_buku">
        </div>
        <div class="form-group">
            <label for="status">Status:</label>
            <select class="form-control" id="status" name="status">
                <option value="Tersedia">Tersedia</option>
                <option value="Tidak_tersedia">Tidak tersedia</option>
            </select>
        </div>
        <div class="form-group">
            <label for="harga">Harga:</label>
            <input type="number" class="form-control" id="harga" name="harga">
        </div>
        <div class="form-group">
            <label for="kategori">Kategori:</label>
            <select class="form-control" id="kategori" name="kategori">
                <?php foreach ($data['kategori'] as $row): ?>
                    <option value="<?php echo $row['id_kategori'] ?>">
                        <?php echo $row['nama_kategori'] ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <button class="btn btn-primary my-4" type="submit" name="submit">Submit</button>
    </form>
</div>