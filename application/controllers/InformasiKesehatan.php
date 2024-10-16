<?php
defined('BASEPATH') or exit('No direct script access allowed');

class InformasiKesehatan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function fraktur()
    {
        // Set judul halaman
        $data['title'] = 'Mode Aktif | Fraktur';

        // Langsung load view tanpa pengecekan user dan role_id
        $this->load->view('templates/header', $data);
        // $this->load->view('topbar', $data);
        $this->load->view('page/informasikesehatan/fraktur', $data);
        $this->load->view('templates/footer');
    }


    public function mobilisasi()
    {
        // Set judul halaman
        $data['title'] = 'Mode Aktif | Mobilisasi';

        // Langsung load view tanpa pengecekan user dan role_id
        $this->load->view('templates/header', $data);
        // $this->load->view('topbar', $data);
        $this->load->view('page/informasikesehatan/mobilisasi', $data);
        $this->load->view('templates/footer');
    }

    public function rentangerak()
    {
        // Set judul halaman
        $data['title'] = 'Mode Aktif | Rentan Gerak';

        // Langsung load view tanpa pengecekan user dan role_id
        $this->load->view('templates/header', $data);
        // $this->load->view('topbar', $data);
        $this->load->view('page/informasikesehatan/rentangerak', $data);
        $this->load->view('templates/footer');
    }


    public function monitorbalutanluka()
    {
        // Set judul halaman
        $data['title'] = 'Mode Aktif | Rentan Gerak';

        // Langsung load view tanpa pengecekan user dan role_id
        $this->load->view('templates/header', $data);
        // $this->load->view('topbar', $data);
        $this->load->view('page/informasikesehatan/monitorbalutanluka', $data);
        $this->load->view('templates/footer');
    }
}
