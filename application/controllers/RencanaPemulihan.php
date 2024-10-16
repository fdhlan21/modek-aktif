<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RencanaPemulihan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function fasemobilisasi()
    {
        // Set judul halaman
        $data['title'] = 'Mode Aktif | Fase Mobilisasi';

        // Langsung load view tanpa pengecekan user dan role_id
        $this->load->view('templates/header', $data);
        // $this->load->view('topbar', $data);
        $this->load->view('page/rencanapemulihan/fasemobilisasi/fasemobilisasi', $data);
        $this->load->view('templates/footer');
    }


    public function tahapanmobilisasi()
    {
        // Set judul halaman
        $data['title'] = 'Mode Aktif | Tahapan Mobilisasi';

        // Langsung load view tanpa pengecekan user dan role_id
        $this->load->view('templates/header', $data);
        // $this->load->view('topbar', $data);
        $this->load->view('page/rencanapemulihan/tahapanmobilisasi/tahapanmobilisasi', $data);
        $this->load->view('templates/footer');
    }

    public function tahapanmobilisasi_detail()
    {
        // Set judul halaman
        $data['title'] = 'Mode Aktif | Tahapan Mobilisasi Detail';

        // Langsung load view tanpa pengecekan user dan role_id
        $this->load->view('templates/header', $data);
        // $this->load->view('topbar', $data);
        $this->load->view('page/rencanapemulihan/tahapanmobilisasi/video', $data);
        $this->load->view('templates/footer');
    }

    public function  latihanrentangerak()
    {
        // Set judul halaman
        $data['title'] = 'Mode Aktif | Latihan Rentan Gerak';

        // Langsung load view tanpa pengecekan user dan role_id
        $this->load->view('templates/header', $data);
        // $this->load->view('topbar', $data);
        $this->load->view('page/rencanapemulihan/latihanrentangerak/latihanrentangerak', $data);
        $this->load->view('templates/footer');
    }

    public function latihanrentangerak_detail()
    {
        // Set judul halaman
        $data['title'] = 'Mode Aktif | Tahapan Mobilisasi Detail';

        // Langsung load view tanpa pengecekan user dan role_id
        $this->load->view('templates/header', $data);
        // $this->load->view('topbar', $data);
        $this->load->view('page/rencanapemulihan/latihanrentangerak/video', $data);
        $this->load->view('templates/footer');
    }
}
