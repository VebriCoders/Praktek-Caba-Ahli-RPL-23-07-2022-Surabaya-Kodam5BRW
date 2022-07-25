<?php
defined('BASEPATH') or exit('No direct script access allowed');
#=======================================================|
#    Simple Code By Pradana Industries By.bri_pebri     |
#=======================================================|
class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        // model
        // $this->load->model('M_Login');
    }

    public function index()
    {
        redirect();
    }

    public function proses()
    {
        //Login Di Menu Apa Di Ambil Di Sini Untuk Di Arahkan Ke Menu Sebelumnya
        $link_back = $this->input->post('link_back');

        //Ambil Data Dari Form (Wajib)
        $email_username = $this->input->post('email_username', TRUE);
        $password = $this->input->post('password', TRUE);

        //Cek Apakah Email Terdaftar
        $user = $this->db->get_where('tbl_admin', ['email_username' => $email_username])->row_array();

        //Proses Login
        if ($user) { //Cek Apakah Email User Terdaftar

            if ($user['active'] == 1) { //Jika User Terdaftar Cek Apakah Akun Aktif

                //Jika Akun Aktif Proses Cek Password
                if (password_verify($password, $user['password'])) { //Cek Password

                    //Ubah Data Online & Last Login
                    $update_data = [
                        'admin_online' => '1', // Admin Online
                        'last_login' => date('Y-m-d H:i:s'), // Waktu Login
                    ];
                    $this->db->where('id_admin', $user['id_admin'])->update('tbl_admin', $update_data);
                    $user_update = $this->db->get_where('tbl_admin', ['email_username' => $email_username])->row_array();

                    //Proses Session
                    $userdata = array(
                        'is_login' => true,
                        'id_admin' => $user_update['id_admin'],
                        'email_username' => $user_update['email_username'],
                        'nama_admin' => $user_update['nama_admin'],
                        'role_id' => $user_update['role_id'],
                        'active' => $user_update['active'],
                        'last_login' => $user_update['last_login']
                    );
                    $this->session->set_userdata($userdata);

                    //Redirect Halaman Sesuai Level User
                    if ($user['role_id'] == 1) {
                        $this->session->set_flashdata('notifikasi', '<div class="alert alert-success fade show" role="alert">
                            <strong>Berhasil!</strong> ' . $this->session->userdata('email_username') . ' Anda berhasil login!.
                        </div>');
                        redirect($link_back);
                    } else if ($user['role_id'] == 2) {
                        $this->session->set_flashdata('notifikasi', '<div class="alert alert-success fade show" role="alert">
                            <strong>Berhasil!</strong> ' . $this->session->userdata('email_username') . ' Anda berhasil login!.
                        </div>');
                        redirect($link_back);
                    }
                } else {
                    //Jika Password Salah Akan Di Arahkan Ke Halaman Sebelumnya
                    $this->session->set_flashdata('notifikasi', '<div class="alert alert-warning fade show" role="alert">
                        <strong>Password Salah!</strong> Masukkan password yang benar!.
                    </div>');
                    redirect($link_back);
                }
            } else {
                //Jika Email Tidak Aktif Akan Di Arahkan Ke Halaman Sebelumnya
                $this->session->set_flashdata('notifikasi', '<div class="alert alert-warning fade show" role="alert">
                        <strong>Email tidak aktif!</strong> silahkan konfirmasi email anda atau hubungi administrator!.
                    </div>');
                redirect($link_back);
            }
        } else {
            //Jika Tidak Terdaftar Akan Di Arahakan Ke Halaman Sebelumnya
            $this->session->set_flashdata('notifikasi', '<div class="alert alert-danger fade show" role="alert">
                        <strong>Gagal!</strong> Email yang anda masukkan tidak terdaftar. Masukkan data lagi dengan benar!.
                    </div>');
            redirect($link_back);
        }
    }

    public function logout()
    {
        //Logout Di Menu Apa Di Ambil Di Sini Untuk Di Arahkan Ke Menu Sebelumnya
        $link_back = $this->input->post('link_back');

        // date_default_timezone_set("Asia/Bangkok");
        $id_admin = $this->session->userdata('id_admin');
        $update_data = [
            'admin_online' => '0', // Admin Offline
            'last_logout' => date('Y-m-d H:i:s'), // Waktu Logout
        ];
        $this->db->where('id_admin', $id_admin)->update('tbl_admin', $update_data);
        $this->session->sess_destroy();


        $this->session->set_flashdata('notifikasi', '<div class="alert alert-success fade show" role="alert">
            <strong>Berhasil!</strong> Anda berhasil logout!.
        </div>');
        redirect($link_back);
    }
}
