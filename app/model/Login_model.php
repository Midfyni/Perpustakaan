<?php
class Login_model
{
    private $table = 'account';
    private $db;
    private $r1;

    public function __construct()
    {
        $this->db = new Database;
    }
    /*public function get_user($usr)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE nomor_induk=:nomor_induk');
        $this->db->bind('nomor_induk', $usr);
        return $this->db->single();
    }*/
    public function signin()
    {
        $err = '';
        $pgna = '';
        if (isset($_POST['submit'])) {
            $username = $_POST['user'];
            $password = $_POST['pass'];
            if(isset($_POST['ingataku'])){
                $ingataku = $_POST['ingataku'];
            }
            if ($username == '' or $password == '') {
                $err .= "<li>Silakan masukkan username dan juga password.</li>";
            } else {
                $this->db->query('SELECT * FROM ' . $this->table . ' WHERE username=:username');
                $this->db->bind('username', $username);
                $pgna = $this->db->single();
                if ($pgna == '') {
                    $err .= "<li>Username <b>" . $this->db->single() . "</b> tidak tersedia.</li>";
                }elseif ($pgna['password'] != sha1($password)) {
                    $err .= "<li>Password yang dimasukkan tidak sesuai.</li>";
                }
                echo '<script language=javascript>alert("ini adlaah nilai error : '.$err.'")</script>';
                if (empty($err)) {
                    $_SESSION['session_username'] = $username;
                    $_SESSION['session_password'] = sha1($password);
                    if (!empty($ingataku) && $ingataku == 1) {
                        $cookie_name = "cookie_username";
                        $cookie_value = $username;
                        $cookie_time = time() + (60 * 60 * 24 * 30);
                        setcookie($cookie_name, $cookie_value, $cookie_time, "/");

                        $cookie_name = "cookie_password";
                        $cookie_value = sha1($password);
                        $cookie_time = time() + (60 * 60 * 24 * 30);
                        setcookie($cookie_name, $cookie_value, $cookie_time, "/");
                    }
                    if($pgna['id_privilage'] == 1){
                        $_SESSION['master'] = true;
                    }else if($pgna['id_privilage'] == 2){
                        $_SESSION['admin'] = true;
                    }else if($pgna['id_privilage']){
                        $_SESSION['user'] = true;
                    }
                    return 'berhasil';
                } else {
                    return 'gagal';
                }
            }
        }
    }
}