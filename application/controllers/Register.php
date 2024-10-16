<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }


    public function index()
    {
        // Aturan validasi untuk nomor telepon harus unik
        $this->form_validation->set_rules('nomortelepon', 'Nomor Telepon', 'required|trim|is_unique[user.nomortelepon]', [
            'is_unique' => 'Nomor telepon ini sudah digunakan!'
        ]);
     
    
        if ($this->form_validation->run() == false) {
            // Jika validasi gagal, kembali ke halaman register
            $data['title'] = 'Mode Aktif - Register';
            $this->load->view('templates/login_header', $data);
            $this->load->view('page/logindanregister/register');
        } else {
            // Jika validasi berhasil, masukkan data ke database
            $data = [
                'namalengkap' => htmlspecialchars($this->input->post('namalengkap', true)),
                'tempatlahir' => htmlspecialchars($this->input->post('tempatlahir', true)),
                'tanggallahir' => htmlspecialchars($this->input->post('tanggallahir', true)),
                'jeniskelamin' => htmlspecialchars($this->input->post('jeniskelamin', true)),
                'operasi' => htmlspecialchars($this->input->post('operasi', true)),
                'waktuoperasi' => htmlspecialchars($this->input->post('waktuoperasi', true)),
                'nomortelepon' => htmlspecialchars($this->input->post('nomortelepon', true)),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT), // Hashing password sebelum menyimpan
            ];
    
            // Insert data ke tabel 'user'
            $this->db->insert('user',  $data);
    
            // Set pesan sukses dan redirect ke halaman login
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Selamat!, Anda telah berhasil membuat akun.
            </div>');
            redirect('login');
        }
    }
    

    public function check_username($username)
    {
        $this->db->where('username', $username);
        $query = $this->db->get('memberadmin');

        if ($query->num_rows() > 0) {
            return true; // Username terdaftar
        } else {
            return false; // Username tidak terdaftar
        }
    }
    private function _login()

    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $admin = $this->db->get_where('memberadmin', ['username' => $username])->row_array();

        if ($admin) {
            // Jika username terdaftar, cek password
            if (password_verify($password, $admin['password'])) {
                $data = [
                    'username' => $admin['username'],
                    'role_id' => $admin['role_id']
                ];
                $this->session->set_userdata($data);
                if ($admin['role_id'] == 1) {
                    redirect('dashboard');
                } else if ($admin['role_id'] == 2) {
                    redirect('dashboard');
                }
            } else {
                // Jika password tidak cocok, tampilkan pesan kesalahan
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Wrong password!
            </div>');
                redirect('login');
            }
        } else {
            // Jika username tidak terdaftar, tampilkan pesan kesalahan
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            This username is not registered.
        </div>');
            redirect('login');
        }
    }



    public function register()
    {


        $this->form_validation->set_rules('email', 'email', 'required|trim|is_unique[memberadmin.email]', [
            'is_unique' => 'This email has already been taken!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]|matches[password]', [
            'min_length' => 'Password too short!',
        ]);

        if ($this->form_validation->run() == false) {

            $data['title'] = 'KING FC - Register';
            $this->load->view('templates/login_header', $data);
            $this->load->view('page/logindanregister/register');
            $this->load->view('templates/login_footer');
        } else {

            $data = [
                'username' => htmlspecialchars($this->input->post('username', true)),
                'nohp' => htmlspecialchars($this->input->post('nohp', true)),
                'alamat' => htmlspecialchars($this->input->post('alamat', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => password_hash(
                    $this->input->post('password'),
                    PASSWORD_DEFAULT
                ),
                'role_id' => 1,
            ];

            $this->db->insert('memberadmin',  $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
Selamat!, Anda telah berhasil membuat akun.
</div>');
            redirect('login');
        }
    }



    public function logout()

    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
 Kamu telah keluar dari situs!
</div>');
        redirect('login');
    }
}
