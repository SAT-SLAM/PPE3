<?php

class ControleurAccueil extends CI_Controller
{
    public function index()
    {
        $this->load->model('Model_PageDeProfil');
        $this->load->view('View_PageDeProfil');
    }
}
?>