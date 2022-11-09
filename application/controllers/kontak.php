<?php

class Kontak extends CI_Controller
{
    public function kontak()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/nav');
        $this->load->view('kontak');
        $this->load->view('templates/footer');
    }
}
