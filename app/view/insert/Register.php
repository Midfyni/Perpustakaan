<div class="container" style="padding-top: 150px;">
    <h2>Input Username & Account</h2>
    <form action="<?= BASEURL; ?>/insert/register" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <input type="text" class="form-control" id="alamat" name="alamat">
        </div>
        <div class="form-group">
            <label for="foto">Foto:</label>
            <input type="file" class="form-control-file" id="foto" name="foto">
        </div>
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control" id="username" name="username">
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="form-group">
            <label for="privilage">Privilege:</label>
            <select class="form-control" id="privilage" name="privilage">
                <option value="2">admin</option>
                <option value="3">pengguna</option>
            </select>
        </div>
        <button class="btn btn-primary my-4" type="submit" name="submit">Submit</button>
    </form>
</div>