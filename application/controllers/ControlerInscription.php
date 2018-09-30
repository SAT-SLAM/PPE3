<?php

class ControleurInscription extends CI_Controller
{
    public function index()
    {
        $this->load->model('Model_Inscription');
        $this->load->view('View_Inscription');
    }
}
?>