<?php
defined('BASEPATH') or exit('No direct script access allowed');

class login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }


    public function index()
    {
        // Mengubah validasi dari username ke nomor telepon
        $this->form_validation->set_rules('nomortelepon', 'Nomor Telepon', 'trim|required', [
            'required' => 'Nomor telepon harus diisi.'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'trim|required', [
            'required' => 'Password harus diisi.'
        ]);
    
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login Page';
            $this->load->view('templates/login_header', $data);
            $this->load->view('page/logindanregister/login');
        } else {
            $this->_login(); // Panggil fungsi _login jika validasi sukses
        }
    }
    
    private function _login()
    {
        // Ambil inputan nomor telepon dan password
        $nomortelepon = htmlspecialchars(trim($this->input->post('nomortelepon')));
        $password = $this->input->post('password');
    
        // Cari user berdasarkan nomor telepon, pastikan nomor telepon tanpa spasi dan trim whitespace
        $user = $this->db->get_where('user', ['nomortelepon' => $nomortelepon])->row_array();
    
        // Jika user ditemukan
        if ($user) {
            // Verifikasi password
            if (password_verify($password, $user['password'])) {
                // Jika password cocok, set session
                $data = [
                    'user_id' => $user['id'],  // Ganti 'id' dengan 'user_id' untuk konsistensi di seluruh aplikasi
                    'namalengkap' => $user['namalengkap'],
                    'nomortelepon' => $user['nomortelepon']
                ];
                $this->session->set_userdata($data);
    
                // Redirect ke dashboard atau halaman lainnya
                redirect('dashboard');
            } else {
                // Jika password salah, tampilkan pesan error
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Password salah!
                </div>');
                redirect('login');
            }
        } else {
            // Jika nomor telepon tidak ditemukan, tampilkan pesan error
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Nomor telepon tidak terdaftar!
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
        $this->session->unset_userdata('user_id'); // Tambahkan ini untuk menghapus user_id dari session
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role_id');
        

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
 Kamu telah keluar dari situs!
</div>');
        redirect('login');
    }
}
