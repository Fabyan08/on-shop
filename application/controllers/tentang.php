<?php

class Tentang extends CI_Controller
{
    public function tentang()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/nav');
        $this->load->view('tentang');
        $this->load->view('templates/footer');
    }
}
