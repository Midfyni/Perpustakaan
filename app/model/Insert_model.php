<?php
class Insert_model
{
    private $table = 'peminjaman';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function insert_item()
    {
        try {
            $err = '';
            if (isset($_POST['submit'])) {
                $id_item = $_POST['id_item'];
                $nama_buku = $_POST['nama_buku'];
                $harga = $_POST['harga'];
                $status = $_POST['status'];
                $kategori = $_POST['kategori'];
                if ($id_item == '') {
                    $err .= "<li>Silakan masukkan id buku.</li>";
                } else {
                    $this->db->query('SELECT * FROM item WHERE id_item=:id_item');
                    $this->db->bind('id_item', $id_item);
                    $pgna = $this->db->single();
                    if ($pgna == '') {
                        $this->db->query("INSERT INTO `item` (`id_item`, `nama_buku`, `status` , `harga`, `id_kategori`) VALUES ('$id_item', '$nama_buku', '$status' , '$harga', '$kategori');");
                        $this->db->execute();
                        echo '<script>alert("insert executed")</script>';
                    } else {
                        $err .= "id_buku=$id_item sudah terisi";
                    }
                    if (!empty($err)) {
                        echo "<script language='javascript'>alert('$err')</script>";
                    }
                    return null;
                }
            }
        } catch (Exception $e) {
            echo "<script>alert('Tidak dapat insert error:'" . $e->getMessage() . ")</sccript>";
        }
    }
    public function insert_transaksi()
    {

        $err = '';
        if (isset($_POST['submit'])) {
            $id_item = $_POST['id_item'];
            $tanggal = $_POST['tanggal'];
            $jumlah = $_POST['jumlah'];
            if ($id_item == '' || $tanggal == '' || $jumlah == '') {
                echo "<script language='javascript'>alert('isi semua column')</script>";
            } else {
                $this->db->query("INSERT INTO `transaksi` (`id_transaksi`, `id_item`, `tanggal`, `jumlah`) VALUES (NULL, '$id_item', '$tanggal', '$jumlah');");
                $this->db->execute();
                echo '<script>alert("insert executed")</script>';
            }
            return null;
        }
    }
    public function insert_register()
    {
        $err = '';
        if (isset($_POST['submit'])) {
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];
            //proses upload file
            $temp = $_FILES['foto']['tmp_name'];
            $foto = $_FILES['foto']['name'];
            $folder = "img/";
            move_uploaded_file($temp, $folder . $foto);
            $username = $_POST['username'];
            $password = $_POST['password'];
            $id_privilage = $_POST['privilage'];
            if (empty($username) || empty($password) || empty($id_privilage)) {
                $err .= "<li>terdapat kolom yang kosong</li>";
            } else {
                $this->db->query('SELECT * FROM account WHERE username=:username');
                $this->db->bind('username', $username);
                $pgna = $this->db->single();
                if ($pgna == '') {
                    $data1 = [
                        'id_profile' => '',
                        'nama' => $nama,
                        'alamat' => $alamat,
                        'foto' => $foto,
                        'username' => $username,
                    ];

                    $data2 = [
                        'username' => $username,
                        'password' => sha1($password),
                        'id_privilage' => $id_privilage,
                    ];

                    $this->db->insertData('account', array_keys($data2), $data2);
                    $this->db->insertData('profile', array_keys($data1), $data1);
                } else {
                    $err .= "username sudah dipakai";
                }
                if (!empty($err)) {
                    echo "<script language='javascript'>alert('$err')</script>";
                }
                return null;
            }
        }
    }
}
?>