<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        // Load database library
        $this->load->database();
        // Load session library jika belum di-load
        $this->load->library('session');
    }

    public function index()
    {
        // Set judul halaman
        $data['title'] = 'Mode Aktif | Profile';

        // Cek apakah user sudah login dengan session 'user_id'
        $user_id = $this->session->userdata('user_id');
        
        if (!$user_id) {
            // Jika user belum login, redirect ke halaman login
            redirect('login');
        } else {
            // Query untuk mengambil data user berdasarkan ID dari session
            $query = $this->db->get_where('user', array('id' => $user_id));
            
            // Periksa apakah user ditemukan di database
            if ($query->num_rows() > 0) {
                $data['user'] = $query->row_array(); // Ambil data user sebagai array
            } else {
                // Jika user tidak ditemukan, redirect ke halaman login
                redirect('login');
            }

            // Load view dengan data user
            $this->load->view('templates/header', $data);
            $this->load->view('page/profile/index', $data);
            $this->load->view('templates/footer');
        }
    }
}
