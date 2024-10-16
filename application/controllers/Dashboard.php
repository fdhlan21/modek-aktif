<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        // Ambil nomor telepon dari session
        $nomortelepon = $this->session->userdata('nomortelepon');
        
        // Ambil data user berdasarkan nomor telepon
        $data['user'] = $this->db->get_where('user', ['nomortelepon' => $nomortelepon])->row_array();

        // Set judul halaman
        $data['title'] = 'Home';
        
        // Cek apakah data user ada berdasarkan nomor telepon
        if ($data['user']) {
            // Jika user ditemukan, kirimkan nama lengkap ke view
            $data['namalengkap'] = $data['user']['namalengkap'];
            
            // Load view untuk halaman home
            $this->load->view('templates/header', $data);
            $this->load->view('page/dashboard/index', $data);
            $this->load->view('templates/footer');
        } else {
            // Jika user tidak ditemukan, redirect ke halaman login
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Anda belum login!</div>');
            redirect('login');
        }
    }
}
