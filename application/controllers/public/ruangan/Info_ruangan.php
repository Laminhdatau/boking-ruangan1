<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Info_ruangan extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Informasi Ruangan';
        $data['info_ruangan'] = $this->M_ruangan->getRuangan();
        $this->load->view('template/public/home_view/header', $data);
        $this->load->view('template/public/home_view/navbar', $data);
        $this->load->view('public/home_view/index', $data);
        $this->load->view('template/public/home_view/footer', $data);
    }

    public function pesan()
    {
        echo "SELAMAT ANDA SUDAH MEMESAN RUANGAN INI";
    }
}