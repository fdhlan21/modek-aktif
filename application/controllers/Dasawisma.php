<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dasawisma extends CI_Controller
{


    function __construct()
    {

        parent::__construct();
    }
    public function index()
    {
        $data['title'] = 'Dasawisma';
        $data['memberadmin'] = $this->db->get_where('memberadmin', ['username' =>
        $this->session->userdata('username')])->row_array();

        // Cek role_id pengguna
        if ($data['memberadmin']['role_id'] == 1) {
            // Jika role_id adalah 1 (admin), tampilkan view admin
            $this->load->view('templates/header', $data);
            $this->load->view('topbar', $data);
            $this->load->view('page/dasawisma/index', $data);
            $this->load->view('templates/footer');
        } elseif ($data['memberadmin']['role_id'] == 2) {
            // Jika role_id adalah 2 (user), tampilkan view user
            $this->load->view('templates/header', $data);
            $this->load->view('topbar', $data);
            $this->load->view('page/berita/berita', $data);
            $this->load->view('templates/footer');
        } else {
            // Jika role_id tidak valid, tampilkan pesan error
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/error', $data);
            $this->load->view('templates/footer');
        }
    }

    public function add()
    {
        $data['title'] = 'Tambah Data - Posyandu Balita';
        $data['memberadmin'] = $this->db->get_where('memberadmin', ['username' =>
        $this->session->userdata('username')])->row_array();


        $this->load->view('templates/header', $data);
        // $this->load->view('topbar', $data);
        $this->load->view('page/dasawisma/add', $data);
        $this->load->view('templates/footer');
    }

    public function edit()

    {
        $data['title'] = 'KING FC - Edit Kontak';
        $data['memberadmin'] = $this->db->get_where('memberadmin', ['username' =>
        $this->session->userdata('username')])->row_array();


        $this->load->view('templates/header', $data);
        // $this->load->view('topbar', $data);
        $this->load->view('page/kontak/edit', $data);
        $this->load->view('templates/footer');
    }

}
