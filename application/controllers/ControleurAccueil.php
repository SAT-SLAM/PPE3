<?php

class ControleurAccueil extends CI_Controller
{
    public function index()
    {
        $this->load->model('Model_Accueil');
        $this->load->view('viewAccueil');
        $this->load->helper('url');
    }
}
?>