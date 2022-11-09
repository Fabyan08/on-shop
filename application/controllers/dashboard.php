<?php

class Dashboard extends CI_Controller
{
    public function index()
    {
        $data['barang'] = $this->model_barang->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/nav');
        $this->load->view('dashboard', $data);
        $this->load->view('templates/footer');
    }
}
